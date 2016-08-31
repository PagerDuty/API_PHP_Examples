<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$SERVICE_ID = 'PQ431JZ';
$EMAIL_FILTER_ID = 'P7COKO7';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/services/' . urlencode($SERVICE_ID) . '/email_filters/' . urlencode($EMAIL_FILTER_ID);
$session = curl_init();

$json_payload = array(
  "email_filter"=> array(
  "body_mode"=> "match",
  "body_regex"=>"[rR]yanio",
));

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
