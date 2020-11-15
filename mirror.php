<?php
$url = "https://www.deepl.com/translator#en/ja/war";
$xml = file_get_contents($url);
header("Content-type: application/xml; charset=UTF-8");
print $xml;
?>