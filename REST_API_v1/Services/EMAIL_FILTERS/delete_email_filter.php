<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';;
$SERVICE_ID = 'PQ431JZ';
$EMAIL_FILTER_ID = 'P76ZJJM';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/services/' . urlencode($SERVICE_ID) . '/email_filters/' . urlencode($EMAIL_FILTER_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
echo $session;
?>
