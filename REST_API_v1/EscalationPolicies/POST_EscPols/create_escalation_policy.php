<?php

$SUBDOMAIN='pdt-dank';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/escalation_policies';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$session = curl_init();

$json_payload = 
      array("name"=> "Escalation Policy",
      "escalation_rules"=> array(array(
          "escalation_delay_in_minutes"=> 22,
          "targets"=> array(array(
              "type"=> "user",
              "id"=> "PPSFHH7"
          )),
      )),
      "num_loops"=> 2);
$gg = json_encode($json_payload);
echo $gg;
curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
