<?php
$koneksi=mysqli_connect(
    "localhost",
    "root",
    "",
    "10115107_penyewaankendaraan"
);


//check koneksi
if (mysqli_connect_errno()) {
    exit(json_encode([
        'status' => 'ERROR',
        'message' => mysqli_error($koneksi),
    ]));
}
