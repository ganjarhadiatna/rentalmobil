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
    	$silinder = '', 
    	$harga = '', 
    	$tahun = ''
    )
    {
        //check image
        $check = getimagesize($cover['tmp_name']);
        if ($check) {
            //target file
            //$target_file = '../public/img/mobil/'.basename($cover['name']);
            //$type_file = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if (file_exists($cover['tmp_name'])) {
                
                //change name file
                $chrc = array('[',']','@',' ','+','-','#','*','<','>','_','(',')',';',
                ',','&','%','$','!','`','~','=','{','}','/',':','?','"',"'",'^');
                $oldname = $cover['name'];
                $newname = '../public/img/mobil/'.time().str_replace($chrc, '', $oldname);

                //rename($cover['tmp_name'], $newname);

                //move image
                //if (move_uploaded_file($cover['tmp_name'], $target_file)) { }

                //move an rename image
                //rename($cover['tmp_name'], $newname) pindahkan lagi ke if
                if (rename($cover['tmp_name'], $newname)) {
                    //saving to database
                    $data = [
                        'foto' => $newname,
                        'nama' => $nama,
                        'jenis' => $jenis,
                        'merk' => $merk,
                        'warna' => $warna,
                        'plat_nomor' => $nomor_polisi,
                        'no_rangka' => $nomor_rangka,
                        'no_mesin' => $nomor_mesin,
                        'isi_silinder' => $silinder,
                        'harga_sewa' => $harga,
                        'tahun' => $tahun
                    ];

                    $rest = modelMobil::create($data);
                    if ($rest) {
                        return 'success';
                    } else {
                        return 'Failed to adding car';
                    }

                } else {
                    return 'Failed to upload image';
                }

            } else {

                return 'File does not exist';

            }

        } else {
            return 'Please choose one image';
        }
    }

    function list()
    {
        //daftar mobil
    }
}
