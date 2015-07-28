<?php
	
function buildSorter($key) { 
	return function ($a, $b) use ($key) { 
		return strnatcmp($a[$key], $b[$key]); 
	}; 
}

$fruits =  [[0, "Apple"], [1, "Pear"], [2, "Orange"]];
usort($fruits, buildSorter(1));

var_dump($fruits);

/*
	Output:
	
	array(3) { 
		[0]=> array(2) { 
			[0]=> int(0) 
			[1]=> string(5) "Apple" 
		} 
		[1]=> array(2) { 
			[0]=> int(2) 
			[1]=> string(6) "Orange" 
		} 
		[2]=> array(2) { 
			[0]=> int(1) 
			[1]=> string(4) "Pear" 
		} 
	} 

	16:35 <@TML> PHPGuy: it takes an argument "$key" and generates a new function (closure) 
	             which will take two values, $a and $b, and sort them based on the 
	             case-insensitive version of the natural string sorting of the values in 
	             $a[$key] and $b[$key]
*/
