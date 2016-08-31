<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/incidents/count';
$session = curl_init();
$json_payload =
      array(
        "since"=>"2014-04-01",
        "until"=>"2014-05-01",
        "status"=>"resolved"
      );

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
