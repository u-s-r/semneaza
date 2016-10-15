<?php
require 'config.php';
require 'vendor/autoload.php';

$url = sprintf('https://spreadsheets.google.com/feeds/list/%s/%s/public/basic?alt=json', SPREADSHEETS_KEY, SPREADSHEETS_WORKSHEET);

function parse_entry_content($str) {
  $props = explode(', ', $str);
  $content = array();

  foreach ($props as $prop) {
    $prop = explode(': ', $prop);

    foreach ($prop as &$value) {
      $value = trim($value);
    }

    if (2 === count($prop)) {
      $content[$prop[0]] = 'nrsemnăturistrânselazi' === $prop[0] ? intval($prop[1]) : $prop[1];
    }
  }

  return $content;
}

function get_data() {
  global $url;

  $data = array();

  $cache = new Gilbitron\Util\SimpleCache();
  $semnaturi = $cache->get_data('semnaturi', $url);
  $semnaturi = json_decode($semnaturi);

  $total = 0;
  $min = 0;
  $max = 0;

  foreach ($semnaturi->feed->entry as $entry) {
    $content = parse_entry_content($entry->content->{'$t'});

    if (!isset($content['_chk2m'])) {
      continue;
    }

    $total += $content['nrsemnăturistrânselazi'];

    if ($max < $content['nrsemnăturistrânselazi']) {
      $max = $content['nrsemnăturistrânselazi'];
    }

    if ('DIASPORA' === $content['_chk2m']) {
      $data['diaspora']['semnaturi'][$content['_chk2m']] = $content['nrsemnăturistrânselazi'];

      continue;
    }

    $data['semnaturi'][$content['_chk2m']] = $content['nrsemnăturistrânselazi'];
  }

  $data['semnaturiStranse'] = $total;
  $data['min'] = $min;
  $data['max'] = $max;

  return $data;
}

function send_data() {
  $data = get_data();

  header('Content-Type: application/json');

  print json_encode($data);
}

send_data();
