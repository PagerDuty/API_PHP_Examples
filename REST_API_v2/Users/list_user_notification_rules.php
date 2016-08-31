<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$USER_ID = 'P9GJP78';

$URL = 'https://api.pagerduty.com/users/' . urlencode($USER_ID) . '/notification_rules';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
?>
