<?php
require '../models/modelMobil.php';
/**
 * summary
 */
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
    	return json_encode($data);
    }
}

//echo controllerMobil::create('ahuy');