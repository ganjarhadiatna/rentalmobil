<?php

require("../../koneksi.php");
require("../../lib-yudi.php");

$nomor_identitas = $_POST['nomor_identitas'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$foto = $_POST['foto'];
$status_member = $_POST['status_member'];

$sql    = "insert into penyewa values('', '$nomor_identitas', '$nama', '$email', '$alamat', '$jenis_kelamin', '$telp', '$foto', '$status_member')";
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
