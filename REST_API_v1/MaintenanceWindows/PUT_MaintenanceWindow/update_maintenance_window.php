<?php
$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID = 'PJR28TQ';
$MAINTENANCE_WINDOW_ID = 'PBTNMKM';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/maintenance_windows/' . urlencode($MAINTENANCE_WINDOW_ID);
$session = curl_init();
$json_payload = array(
                    "maintenance_window" => array(
                        "description" => "test again"
                    )
                );

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
