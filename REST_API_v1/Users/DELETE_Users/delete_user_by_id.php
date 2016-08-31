<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$USER_ID = 'PHKK1O7';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users/' . $USER_ID;
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
