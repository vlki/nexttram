<?php

$url = 'http://idsjmk.cz/odjezdy/result.aspx?stopId=1657&poleId=2&oznacnik=-%3E%20%C4%8Cesk%C3%A1';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo $result;

curl_close($ch);
