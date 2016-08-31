<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$ESCALATION_POLICY_ID='P0W5W3O';
$ESCALATION_RULE_ID='PXJ61Q0';
$session = curl_init();
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/escalation_policies/' . urlencode($ESCALATION_POLICY_ID) . '/escalation_rules/';
$session = curl_init();

$json_payload = array(
  "escalation_rules" => array(
    array(
      "escalation_delay_in_minutes" => 59,
      "targets" => array(
          array(
              "type" => "user",
              "id" => "PJR28TQ"
          )
      )
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
