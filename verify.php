<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:fZjAvfOVnbVywJS';

$access_token = '/tGMUg8XbOxnElMSVFnZdMaEyUoIOGVentGWCRnNkY7iwaVp8r25THGwuFNnj7a2fA6PxEE6EE0k2KlzoWg9OLtXXn0SmDLa9CR5RlwrRVhOxt9jddFVnxCh2ZDIANfY2I7fYPiw/Vsbzt89KjFbBgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
