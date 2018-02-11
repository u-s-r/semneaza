<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

use phpFastCache\CacheManager;

CacheManager::setDefaultConfig([
    "path" => __DIR__ . "/../cache/"
]);

function get_locatii($data) {
  $linii = explode("\n", $data);
  $locatii_judet = [];
  $ultima_localitate = null;

  foreach ($linii as $linie) {
    $linie = trim($linie);

    if (empty($linie)) {
      continue;
    }

    if ($linie[0] == '-') {
      if ($ultima_localitate == null) {
        // Malformed field
        continue;
      }

      $ultima_localitate['intrari'][] = ltrim($linie, ' -');
    } else {
      if ($ultima_localitate != null) {
        $locatii_judet[] = $ultima_localitate;
      }

      $ultima_localitate = ['locatie'=>$linie, 'intrari'=>[]];
    }
  }

  if ($ultima_localitate != null) {
    $locatii_judet[] = $ultima_localitate;
  }

  return $locatii_judet;
}

function get_data() {
  $data = array();

  $instance_cache = CacheManager::getInstance('files');

  $statistici_judete = $instance_cache->getItem('statistici_judete');

  if (is_null($statistici_judete->get())) {
    $service = get_spreadsheets_service ();

    $tabel = $service->spreadsheets_values->get(SPREADSHEET_ID, SPREADSHEET_RANGE_FOR_DISPLAY);

    $statistici_judete->set($tabel)->expiresAfter(10*60);

    $instance_cache->save($statistici_judete);
  } else {
    $tabel = $statistici_judete->get();
  }

  $total = 0;
  $min = 0;
  $max = 0;

  $nume_coloane = [
    'semnaturi' => SEMNATURI_COLUMN_KEY,
    'prescurtare_judet' => PRESCURTARE_JUDET_COLUMN_KEY,
    'contacte' => CONTACTE_COLUMN_KEY,
    'corturi' => CORTURI_COLUMN_KEY,
    'nume_judet' => NUME_JUDET_COLUMN_KEY
  ];
  $indici_coloane = [];

  foreach ($nume_coloane as $cheie => $nume_coloana) {
    for ($i = 0; $i < sizeof($tabel->values[0]); $i++) {
      if ($tabel->values[0][$i] === $nume_coloana) {
        $indici_coloane[$cheie] = $i;
      }
    }
  }

  // Sarim peste primul rand deoarece e randul cu headerele coloanelor
  for ($i = 1; $i < sizeof($tabel->values); $i++) {
    $semnaturi_judet = $tabel->values[$i][$indici_coloane['semnaturi']];
    $prescurtare_judet = $tabel->values[$i][$indici_coloane['prescurtare_judet']];

    $data['numeJudet'][$prescurtare_judet] = $tabel->values[$i][$indici_coloane['nume_judet']];
    $data['contacte'][$prescurtare_judet] = get_locatii($tabel->values[$i][$indici_coloane['contacte']]);
    $data['corturi'][$prescurtare_judet] = get_locatii($tabel->values[$i][$indici_coloane['corturi']]);

    // Parseaza campul de semnaturi
    if (!isset($prescurtare_judet)) {
      continue;
    }

    if (!isset($semnaturi_judet)) {
      $semnaturi_judet = 0;
    }

    $total += $semnaturi_judet;

    if ($max < $semnaturi_judet) {
      $max = $semnaturi_judet;
    }

    $data['semnaturi'][$prescurtare_judet] = $semnaturi_judet;
  }

  $data['semnaturiStranse'] = $total;
  $data['min']              = $min;
  $data['max']              = $max;
  $data['targetSemnaturi']  = TARGET_SEMNATURI;
  $data['deadlineSemnaturi'] = DEADLINE;
  $data['campanieSemnaturi'] = CAMPANIE_DE_SEMNATURI;

  return $data;
}

function get_spreadsheets_service() {
  $client = new Google_Client();

  // Below is the credential setup for a Gooogle service account setup like here:
  // http://ajaxray.com/blog/store-data-to-google-sheets-using-php/
  $client->useApplicationDefaultCredentials();
  $client->setClientId(GOOGLE_CLIENT_ID);
  $client->setConfig('client_email', GOOGLE_SERVICE_ACCOUNT_CLIENT_EMAIL);
  $client->setConfig('signing_key', GOOGLE_SERVICE_ACCOUNT_SIGNING_KEY);
  $client->setConfig('signing_algorithm', 'HS256');
  $client->setScopes(Google_Service_Sheets::SPREADSHEETS);

  return new Google_Service_Sheets($client);
}

function asset_url($relative_path) {
  if (defined("ASSET_URL")) {
    return ASSET_URL . $relative_path;
  } else {
    return "/build/" . $relative_path;
  }
}

function link_url($relative_path) {
  if (defined("SITE_URL")) {
    return SITE_URL . $relative_path;
  } else {
    return "/" . $relative_path;
  }
}
