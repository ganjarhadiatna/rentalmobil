<?php
$koneksi=mysqli_connect(
    "localhost",
    "root",
    "",
    "tubes_atol_rental"
);


//check koneksi
if (mysqli_connect_errno()) {
    echo "gagal koneksi ke database";
}
