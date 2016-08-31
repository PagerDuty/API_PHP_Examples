<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID = 'PJR28TQ';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/maintenance_windows';
$session = curl_init();
$json_payload = array(
                    "maintenance_window" => array(
                        "start_time"=>"2015-06-16T13:00:00-04:00Z",
                        "end_time"=>"2015-06-18T13:00:00-04:00Z",
                        "description" => "test",
                        "service_ids" => array(
                            "P7LR7HG"
                        )
                    ),
                    "requester_id" => $REQUESTER_ID
                );

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
