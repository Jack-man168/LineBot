<?php
$access_token = '#EKdZ6BeTdXO+dWiZh03f6QR4ZzNiNw9msTOV0E1I87iRLo2mjtWyjFMA9cTWAkopvKaywh00pSFx3XY9oEUnrZlfvddMDFIWrT3BjK2FrRgSiivESG2+OTAqUaM4s/CAJvTxPDJP3m9/gs6Wt5j5NAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
