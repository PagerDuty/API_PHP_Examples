<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$INCIDENT_ID = 'P7K4U09';
$PAYLOAD = array(
  'duration' => 60
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/incidents/' . urlencode($INCIDENT_ID) . '/snooze';
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
