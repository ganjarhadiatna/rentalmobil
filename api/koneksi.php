<?php
$koneksi=mysqli_connect(
    "localhost",
    "root",
    "",
    "db_rental_mobil"
);


//check koneksi
if (mysqli_connect_errno()) {
    echo "gagal koneksi ke database";
}
