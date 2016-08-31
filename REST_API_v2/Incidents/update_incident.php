<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$INCIDENT_ID = 'P2RDEWJ';
$PAYLOAD = array(
  'incident' => array(
    'type' => 'incident_reference',
    'status' => 'resolved'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/incidents/' . urlencode($INCIDENT_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY,
    'From: ' . $REQUESTER_EMAIL
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
$output = curl_exec($session);
?>
