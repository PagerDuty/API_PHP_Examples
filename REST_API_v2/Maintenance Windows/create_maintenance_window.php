<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$PAYLOAD = array(
  'maintenance_window' => array(
    'type' => 'maintenance_window',
    'start_time' => '2017-01-01T14:00:00-07:00',
    'end_time' => '2017-02-01T14:00:00-07:00',
    'description' => 'Immanentizing the eschaton',
    'services' => array(
      array(
        'id' => 'PQB3T7F',
        'type' => 'service_reference'
      )
    )
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/maintenance_windows';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY,
    'From: ' . $REQUESTER_EMAIL
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
