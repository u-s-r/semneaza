<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

function get_locatii($data) {
  $linii = explode("\n", $data);
  $locatii_judet = [];
  $ultima_localitate = null;

  foreach ($linii as $linie) {
    $linie = trim($linie);

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
  $url = sprintf('https://sheets.googleapis.com/v4/spreadsheets/%s/values/%s?key=%s', SPREADSHEET_ID, urlencode(SPREADSHEET_RANGE_FOR_DISPLAY), GOOGLE_API_KEY);

  $data = array();

  $cache     = new Gilbitron\Util\SimpleCache();
  $tabel = $cache->get_data('semnaturi', $url);
  $tabel = json_decode($tabel);

  $total = 0;
  $min   = 0;
  $max   = 0;

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
  $data['deadlineSemnaturi'] = DEADLINE_SEMNATURI;

  return $data;
}
