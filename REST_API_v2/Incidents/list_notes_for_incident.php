<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$INCIDENT_ID = 'P2RDEWJ';

$URL = 'https://api.pagerduty.com/incidents/' . urlencode($INCIDENT_ID) . '/notes';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
?>
