<?php

$SUBDOMAIN='pdt-dank';
$USER_ID = 'PJR28TQ';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users/' . urlencode($USER_ID) . '/notification_rules';
$API_ACCESS_KEY = 'LUyh49deFPBDBEsEBZeJ';
$CONTACT_METHOD_ID='PIEGIBK';
$session = curl_init();

$json_payload = array("notification_rule"=>
                    array(
                            "contact_method_id"=> $CONTACT_METHOD_ID,
                            "start_delay_in_minutes"=>12,
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
