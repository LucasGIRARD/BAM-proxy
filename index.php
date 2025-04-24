<?php
$domain = "http://bamcollectif.wix.com/bamcollectif/";
$realDomain = "http://www.cbam.fr/";
$url = $_GET[0];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$domain.$url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7");
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
$data = curl_exec($ch);
curl_close($ch);
$data = str_replace($domain, $realDomain, $data);
print_r($data);
?> 