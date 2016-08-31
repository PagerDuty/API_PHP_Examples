<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$ESCALATIONPOLICY_ID = 'P0W5W3O';
$ESCALATION_POLICY_RULE_ID = 'PXJ61Q0';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/escalation_policies/' . urlencode($ESCALATIONPOLICY_ID) . '/escalation_rules/' . urlencode($ESCALATION_POLICY_RULE_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
