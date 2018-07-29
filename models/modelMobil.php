<?php
require_once '../config/database.php';

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
    function list($limit, $offset)
    {
    	$cn = new database();
    	$rest = $cn->query_select("select id_mobil, foto, nama, plat_nomor, merk, warna, harga_sewa, status from mobil limit ".$limit." offset ".$offset);
    	if ($rest) {
    		return $rest;
    	}

    }
}
