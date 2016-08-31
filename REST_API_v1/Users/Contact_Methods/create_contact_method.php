<?php

$SUBDOMAIN='pdt-dank';
$USER_ID = 'PJR28TQ';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users/' . $USER_ID . '/contact_methods';
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$session = curl_init();

$json_payload = array(
            "contact_method"=> array(
                "type"=>"SMS",
                "address"=>"5551112222",
                "label"=>"my label",
                "country_code"=>"1"
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
