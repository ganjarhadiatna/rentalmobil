<?php

require("../../koneksi.php");
require("../../lib-yudi.php");

$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_akhir_pinjam = $_POST['tgl_akhir_pinjam'];
$harga_sewa = $_POST['harga_sewa'];
$lama_pinjam = $_POST['lama_pinjam'];
$total_bayar = $_POST['total_bayar'];
$id_admin = $_POST['id_admin'];
$id_penyewa = $_POST['id_penyewa'];
$id_mobil = $_POST['id_mobil'];

$sql = "insert into sewa values('', '$tgl_pinjam', '$tgl_akhir_pinjam', '$harga_sewa', '$lama_pinjam', '$total_bayar', '$id_admin', '$id_penyewa')";
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
