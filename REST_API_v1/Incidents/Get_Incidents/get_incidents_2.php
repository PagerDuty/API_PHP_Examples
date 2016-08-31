<?php

$SUBDOMAIN='pdt-dank';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/incidents?fields=incident_number,status';
$API_ACCESS_KEY = 'LUyh49deFPBDBEsEBZeJ';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
