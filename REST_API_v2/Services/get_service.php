<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';
$SERVICE_ID = 'PKWTQ2A';

$URL = 'https://api.pagerduty.com/services/' . urlencode($SERVICE_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
$status = curl_getinfo($session, CURLINFO_HTTP_CODE);
print($status);
?>
