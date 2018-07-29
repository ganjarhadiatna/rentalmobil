<?php

require("../koneksi.php");
require("../lib-yudi.php");

$id = $_POST['id_penyewa'];
$nomor_identitas = $_POST['nomor_identitas'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
//$foto = $_POST['foto'];
$status_member = $_POST['status_member'];

$sql    = "update penyewa set nomor_identitas='$nomor_identitas', nama='$nama', email='$email', alamat='$alamat', jenis_kelamin='$jenis_kelamin', telp='$telp', status_member='$status_member' WHERE id_penyewa = '$id'";
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
