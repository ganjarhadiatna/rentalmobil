<?php

require("../koneksi.php");
require("../lib-yudi.php");

$id             = $_POST['id_admin'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$telp           = $_POST['telp'];

$sql = "update admin set username=$username, password=$password, nama=$nama, alamat=$alamat, jenis_kelamin$=jenis_kelamin, telp=$telp WHERE id_admin = $id";
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
