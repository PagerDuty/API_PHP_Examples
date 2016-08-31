<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$SERVICE_ID = 'P7LR7HG';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/services/' . urlencode($SERVICE_ID);
$session = curl_init();

$json_payload = array(
                "service" => array(
                    "name"=>"huggie bear new",
                    "description"=>"yo huggie",
                    "escalation_policy_id"=>$ESCALATION_POLICY_ID
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
