<?php

require("../koneksi.php");
require("../lib-yudi.php");

$id             = $_POST['id_pinjam'];
$tgl_pinjam     = $_POST['tgl_pinjam'];
$lama_pinjam    = $_POST['lama_pinjam'];
$id_penyewa     = $_POST['id_penyewa'];
$id_mobil       = $_POST['id_mobil'];

$sql = "update detail_sewa set tgl_pinjam=$tgl_pinjam, lama_pinjam=$lama_pinjam, id_penyewa=$id_penyewa, id_mobil=$id_mobil WHERE id_pinjam = $id";
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
