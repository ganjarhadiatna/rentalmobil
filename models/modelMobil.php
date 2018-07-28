<?php
class modelMobil
{
    function create($data)
    {
		$cn = new database();
		$rest = $cn->query("insert into mobil (".$cn->convert_array($data, 'column').") values (".$cn->convert_array($data, 'values').")");
    	if ($rest) {
    		return $rest;
    	}
    }
    function list()
    {
    	$cn = new database();
    	$rest = $cn->query("select * from mobil");
    	if ($rest) {
    		return $rest;
    	}
    }
}
