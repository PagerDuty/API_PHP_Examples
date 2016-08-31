<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$INCLUDE_1 = 'contact_methods';
$INCLUDE_2 = 'notification_rules';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users?include[]=' . $INCLUDE_1 . '&include[]=' . $INCLUDE_2;
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
