<?php

require("../koneksi.php");
require("../lib-yudi.php");

$username       = $_POST['username'];
$password       = $_POST['password'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$telp           = $_POST['telp'];

$sql = "insert into admin values ('', '$username', '$password', '$nama', '$alamat', '$jenis_kelamin', '$telp')";
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
