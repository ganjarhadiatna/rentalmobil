<?php

require("../koneksi.php");
require("../lib-yudi.php");

$id = $_POST['id'];
$plat_nomor = $_POST['plat_nomor'];
$no_rangka = $_POST['no_rangka'];
$no_mesin = $_POST['no_mesin'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];
$isi_silinder = $_POST['isi_silinder'];
$tahun = $_POST['tahun'];
$harga_sewa = $_POST['harga_sewa'];
//$foto = $_POST['foto'];
$status = $_POST['status'];

$sql = "update mobil set plat_nomor='$plat_nomor', no_rangka='$no_rangka', no_mesin='$no_mesin', nama='$nama', jenis='$jenis', merk='$merk', warna='$warna', isi_silinder='$isi_silinder', tahun='$tahun', harga_sewa='$harga_sewa', status='$status' WHERE id_mobil = $id";
$result = mysqli_query($koneksi,$sql);

if ($result)
{
    echo json_encode([
        'status'    => 'OK',
        'message'   => '',
    ]);
}
else
{
    echo json_encode([
        'status'    => 'ERROR',
        'message'   => mysqli_error($koneksi),
    ]);
}
