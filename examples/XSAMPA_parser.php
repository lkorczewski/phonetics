<?php

require_once __DIR__ . '/../XSAMPA_parser.php';

$xsampa_string = '"SOJ@';
$xsampa = new \Dictionary\XSAMPA_Parser($xsampa_string);
$ipa_string = $xsampa->parse($xsampa_string);
echo "$xsampa_string -> $ipa_string\n";

?>
