<?php
require 'config.php';
require 'vendor/autoload.php';

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
  $url = sprintf('https://sheets.googleapis.com/v4/spreadsheets/%s/values/%s?key=%s', SPREADSHEETS_KEY, urlencode(SPREADSHEETS_RANGE), GOOGLE_SHEETS_API_KEY);

  $data = array();

  $cache     = new Gilbitron\Util\SimpleCache();
  $tabel = $cache->get_data('semnaturi', $url);
  $tabel = json_decode($tabel);

  $total = 0;
  $min   = 0;
  $max   = 0;

  $nume_coloane = [
    'semnaturi' => SEMNATURI_COLUMN_KEY,
    'judet' => JUDET_COLUMN_KEY,
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
    $judet = $tabel->values[$i][$indici_coloane['judet']];

    $data['numeJudet'][$judet] = $tabel->values[$i][$indici_coloane['nume_judet']];
    $data['contacte'][$judet] = get_locatii($tabel->values[$i][$indici_coloane['contacte']]);
    $data['corturi'][$judet] = get_locatii($tabel->values[$i][$indici_coloane['corturi']]);

    // Parseaza campul de semnaturi
    if (!isset($judet)) {
      continue;
    }

    if (!isset($semnaturi_judet)) {
      $semnaturi_judet = 0;
    }

    $total += $semnaturi_judet;

    if ($max < $semnaturi_judet) {
      $max = $semnaturi_judet;
    }

    $data['semnaturi'][$judet] = $semnaturi_judet;
  }

  $data['semnaturiStranse'] = $total;
  $data['min']              = $min;
  $data['max']              = $max;
  $data['targetSemnaturi']  = TARGET_SEMNATURI;
  $data['deadlineSemnaturi'] = DEADLINE_SEMNATURI;

  return $data;
}
