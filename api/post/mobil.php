<?php

require("../../koneksi.php");
require("../../lib-yudi.php");

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
$foto = $_POST['foto'];
$status = $_POST['status'];

$sql = "insert into mobil values('', '$plat_nomor', '$no_rangka', '$no_mesin', '$nama', '$jenis', '$merk', '$warna', '$isi_silinder', '$tahun', '$harga_sewa', '$foto', '$status')";
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
