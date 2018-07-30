<?php

require("../koneksi.php");
require("../lib-yudi.php");

$tgl_pinjam     = $_POST['tgl_pinjam'];
$lama_pinjam    = $_POST['lama_pinjam'];
$id_penyewa     = $_POST['id_penyewa'];
$id_mobil       = $_POST['id_mobil'];

$sql = "insert into detail_sewa values('', '$tgl_pinjam', '$lama_pinjam', '$id_penyewa', '$id_mobil')";
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
