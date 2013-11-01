<?php

namespace Phonetics;

require_once __DIR__ . '/reversible_parser.php';

//============================================================================
// X-SAMPA to IPA parser, with some of Z-SAMPA extensions
// right now parses just a few most common symbols
//============================================================================

class XSAMPA_Parser implements Reversible_Parser {
	
	private $transition = array(
		
		// modifiers
		// must be first to avoid collisions
		
		'_h' => 'ʰ',
		'_j' => 'ʲ',
		
		// lowercase letters
		
		'd`'  => 'ɖ',
		'h\\' => 'ɦ',
		'i\\' => 'ɨ',
		'l`'  => 'ɭ',
		'n`'  => 'ɳ',
		'u\\' => 'ʉ',
		'r`'  => 'ɽ',
		's`'  => 'ʂ',
		's\\' => 'ɕ',
		't`'  => 'ʈ',
		'z`'  => 'ʐ',
		'z\\' => 'ʑ',
		
		// uppercase letters
		
		'A' => 'ɑ',
		'B' => 'β',
		'E' => 'ɛ',
		'G' => 'ɣ',
		'I' => 'ɪ',
		'J' => 'ɲ',
		'L' => 'ʎ',
		'M' => 'ɯ',
		'N' => 'ŋ',
		'O' => 'ɔ',
		'S' => 'ʃ',
		'T' => 'θ',
		'U' => 'ʊ',
		'X' => 'χ',
		'Z' => 'ʒ',
		
		// other systems
		
		'"' => 'ˈ',
		'@' => 'ə',
		':' => 'ː',
		',' => 'ˌ',
		
	);
	
	private $find = array();
	private $replace = array();
	
	//------------------------------------------------
	// constructor
	//------------------------------------------------
	
	function __construct(){
		$this->find     = array_keys($this->transition);
		$this->replace  = array_values($this->transition);
	}
	
	//------------------------------------------------
	// parsing XSAMPA string to IPA string
	//------------------------------------------------
	
	function parse($xsampa_string){
		$output = str_replace(
			$this->find,
			$this->replace,
			$xsampa_string
		);
		return $output;
	}
	
	//------------------------------------------------
	// hopefully parsing IPA string to XSAMPA string
	//  in the future
	//------------------------------------------------
	
	function unparse($ipa_string){
		$output = str_replace(
			$this->replace,
			$this->find,
			$ipa_string
		);
		return $output;
	}
	
}

?>
