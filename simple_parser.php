<?php

namespace Phonetics;

require_once __DIR__ . '/reversible_parser.php';

abstract class Simple_Parser implements Reversible_Parser {
	
	protected $transition = array();
	
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
	// parsing
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
	// unparsing
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