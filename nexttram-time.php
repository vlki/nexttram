<?php

$url = 'http://worldtimeengine.com/current/prague_czech_republic/9908';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Accept-Language' => 'en-US,en;q=0.8',
    'Accept-Charset' => 'ISO-8859-1,utf-8;q=0.7,*;q=0.3',
));

$result = curl_exec($ch);

echo $result;

curl_close($ch);


