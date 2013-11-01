<?php

require_once __DIR__ . '/../XSAMPA_parser.php';

// initialization

$xsampa_string = '"SOJ@ p_hMNE';
$xsampa = new \Dictionary\XSAMPA_Parser();

// parsing

$ipa_string = $xsampa->parse($xsampa_string);
echo "$xsampa_string -> $ipa_string\n";

// unparsing

$xsampa_string_again = $xsampa->unparse($ipa_string);
echo "$ipa_string -> $xsampa_string_again\n";

?>
