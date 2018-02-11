<?php

if(defined('DEBUG')) {
  ini_set('display_errors', 'On');
}

try {
  require_once __DIR__ . '/include/functions.php';

  $service = get_spreadsheets_service();

  $requestBody = new Google_Service_Sheets_ValueRange();

  if (empty(trim($_POST['tel'])) && empty(trim($_POST['email']))) {
    echo (json_encode(['success' => false, 'message' => 'both_empty']));
    die();
  }

  // Not gonna do any encoding here, leaving it to the Google library
  $requestBody->setValues([
      [$_POST['name'], $_POST['tel'], $_POST['email'], $_POST['address']]
  ]);

  $response = $service->spreadsheets_values->append(SPREADSHEET_ID, SPREADSHEET_RANGE_FOR_FORM, $requestBody, ['valueInputOption' => 'RAW']);

  if(defined('DEBUG')) {
    echo '<pre>', var_export($response, true), '</pre>', "\n";
  }

  echo (json_encode(['success' => true]));
} catch(Exception $e) {
  echo (json_encode(['success' => false, 'message' => 'sending_failure']));
}
