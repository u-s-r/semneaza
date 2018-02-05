<?php

if(defined('DEBUG')) {
  ini_set('display_errors', 'On');
}

try {
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/config.php';

  $client = new Google_Client();

  // Below is the credential setup for a Gooogle service account setup like here:
  // http://ajaxray.com/blog/store-data-to-google-sheets-using-php/
  $client->useApplicationDefaultCredentials();
  $client->setClientId(GOOGLE_CLIENT_ID);
  $client->setConfig('client_email', GOOGLE_SERVICE_ACCOUNT_CLIENT_EMAIL);
  $client->setConfig('signing_key', GOOGLE_SERVICE_ACCOUNT_SIGNING_KEY);
  $client->setConfig('signing_algorithm', 'HS256');
  $client->setScopes(Google_Service_Sheets::SPREADSHEETS);

  $service = new Google_Service_Sheets($client);

  $requestBody = new Google_Service_Sheets_ValueRange();

  if (empty(trim($_POST['tel'])) && empty(trim($_POST['email']))) {
    echo (json_encode(['success' => false, 'message' => 'both_empty']));
    die();
  }

  // Not gonna do any encoding here, leaving it to the Google library
  $requestBody->setValues([
      [$_POST['name'], $_POST['tel'], $_POST['email']]
  ]);

  $response = $service->spreadsheets_values->append(SPREADSHEET_ID, SPREADSHEET_RANGE_FOR_FORM, $requestBody, ['valueInputOption' => 'RAW']);

  if(defined('DEBUG')) {
    echo '<pre>', var_export($response, true), '</pre>', "\n";
  }

  echo (json_encode(['success' => true]));
} catch(Exception $e) {
  echo (json_encode(['success' => false, 'message' => 'sending_failure']));
}
