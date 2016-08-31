<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'LUyh49deFPBDBEsEBZeJ';
$USER_ID = 'PJR28TQ';
$CONTACT_METHOD_ID = 'PSD17NZ';
$NOTIFICATION_RULE_ID='PKQMJN2';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users/' . urlencode($USER_ID) . '/notification_rules/' . urlencode($NOTIFICATION_RULE_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
