<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID='PJR28TQ';
$INCIDENT_ID='PATYJKI';
$session = curl_init();
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/incidents';
$session = curl_init();

$json_payload = array(
  "requester_id" => $REQUESTER_ID,
  "incidents" => array(
    array(
        "id" => $INCIDENT_ID,
        "status" => "resolved"
    )
    )
  );
curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
