<?php

require("../koneksi.php");
require("../lib-yudi.php");

$id = $_POST['id_sewa'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_akhir_pinjam = $_POST['tgl_akhir_pinjam'];
$harga_sewa = $_POST['harga_sewa'];
$lama_pinjam = $_POST['lama_pinjam'];
$total_bayar = $_POST['total_bayar'];
$status_sewa = $_POST['status_sewa'];

/*$id_admin = $_POST['id_admin'];
$id_penyewa = $_POST['id_penyewa'];
$id_mobil = $_POST['id_mobil'];*/

$sql = "
	UPDATE 
		sewa 
	SET 
		tgl_pinjam='$tgl_pinjam', 
		tgl_akhir_pinjam='$tgl_akhir_pinjam', 
		harga_sewa='$harga_sewa', 
		lama_pinjam='$lama_pinjam', 
		total_bayar='$total_bayar', 
		status_sewa='$status_sewa'
	WHERE 
		id_sewa = $id
";

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
