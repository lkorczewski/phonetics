<?php

namespace Phonetics;

require_once __DIR__ . '/parser.php';

interface Reversible_Parser extends Parser {
	function unparse($string);	
}

?>
