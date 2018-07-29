<?php
$koneksi=mysqli_connect(
    "localhost",
    "root",
    "",
    "10115107_penyewaankendaraan"
);


//check koneksi
if (mysqli_connect_errno()) {
    echo mysqli_error($koneksi);
}
