<?php
require_once '../models/modelMobil.php';

class controllerMobil
{
    function create (
    	$cover = '', 
    	$nama = '', 
    	$jenis = '', 
    	$merk = '', 
    	$warna = '', 
    	$nomor_polisi = '', 
    	$nomor_rangka = '', 
    	$nomor_mesin = '', 
    	$slinder = '', 
    	$harga = '', 
    	$tahun = ''
    )
    {
        //move image

        //saving to database
    	$data = [
    	    'cover' => $cover,
    	    'nama' => $nama,
    	    'jenis' => $jenis,
    	    'merk' => $merk,
    	    'warna' => $warna,
    	    'nomor_polisi' => $nomor_polisi,
    	    'nomor_rangka' => $nomor_rangka,
    	    'nomor_mesin' => $nomor_mesin,
    	    'slinder' => $cover,
    	    'harga' => $harga,
    	    'tahun' => $tahun
    	];

        $rest = modelMobil::create($data);

        if ($rest) {
            return $rest;
        } else {
            return 'Failed to adding car';
        }
    }
}
