<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$USER_ID = 'PJR28TQ';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users/' . $USER_ID . '/on_call';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
