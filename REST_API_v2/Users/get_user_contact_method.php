<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';
$USER_ID = 'P9GJP78';
$CM_ID = 'PIOUW5Q';

$URL = 'https://api.pagerduty.com/users/' . urlencode($USER_ID) . '/contact_methods/' . urlencode($CM_ID);
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
