<?php

function encodePercentURI($string){
	
	$string = str_replace("%20", " ", $string);
	$string = str_replace("%21", "!", $string);
	$string = str_replace("%22", "\"", $string);
	$string = str_replace("%23", "#", $string);
	$string = str_replace("%24", "$", $string);
	$string = str_replace("%26", "&", $string);
	$string = str_replace("%27", "'", $string);
	$string = str_replace("%28", "(", $string);
	$string = str_replace("%29", ")", $string);
	$string = str_replace("%2A", "*", $string);
	$string = str_replace("%2B", "+", $string);
	$string = str_replace("%2C", ",", $string);
	$string = str_replace("%2E", ".", $string);
	$string = str_replace("%2F", "/", $string);
	$string = str_replace("%3A", ":", $string);
	$string = str_replace("%3B", ";", $string);
	$string = str_replace("%3C", "<", $string);
	$string = str_replace("%3D", "=", $string);
	$string = str_replace("%3E", ">", $string);
	$string = str_replace("%3F", "?", $string);
	$string = str_replace("%40", "@", $string);
	$string = str_replace("%5B", "[", $string);
	$string = str_replace("%5C", "\", $string);
	$string = str_replace("%5D", "]", $string);
	$string = str_replace("%7B", "{", $string);
	$string = str_replace("%7C", "|", $string);
	$string = str_replace("%7D", "}", $string);
	$string = str_replace("%25", "%", $string);
	
	return $string;
	
}

function decodePercentURI($string){
	
	$string = str_replace("%", "%25", $string);
	$string = str_replace(" ", "%20", $string);
	$string = str_replace("!", "%21", $string);
	$string = str_replace("\"", "%22", $string);
	$string = str_replace("#", "%23", $string);
	$string = str_replace("$", "%24", $string);
	$string = str_replace("&", "%26", $string);
	$string = str_replace("'", "%27", $string);
	$string = str_replace("(", "%28", $string);
	$string = str_replace(")", "%29", $string);
	$string = str_replace("*", "%2A", $string);
	$string = str_replace("+", "%2B", $string);
	$string = str_replace(",", "%2C", $string);
	$string = str_replace(".", "%2E", $string);
	$string = str_replace("/", "%2F", $string);
	$string = str_replace(":", "%3A", $string);
	$string = str_replace(";", "%3B", $string);
	$string = str_replace("<", "%3C", $string);
	$string = str_replace("=", "%3D", $string);
	$string = str_replace(">", "%3E", $string);
	$string = str_replace("?", "%3F", $string);
	$string = str_replace("@", "%40", $string);
	$string = str_replace("[", "%5B", $string);
	$string = str_replace("\", "%5C", $string);
	$string = str_replace("]", "%5D", $string);
	$string = str_replace("{", "%7B", $string);
	$string = str_replace("|", "%7C", $string);
	$string = str_replace("}", "%7D", $string);
	
	return $string;
	
}
