<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$ESCALATION_POLICY_ID='P0W5W3O';
$session = curl_init();
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/services';

$json_payload = array(
                "service" => array(
                    "name"=>"huggie bear",
                    "description"=>"yo huggie",
                    "escalation_policy_id"=>$ESCALATION_POLICY_ID,
                    "type"=>"generic_events_api"
                )
     );
curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>

