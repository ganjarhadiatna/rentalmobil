<?php

require("../koneksi.php");
require("../lib-yudi.php");
require("../../config/session.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && isset($password)) 
{

	$sql = "select id_admin, username from admin where username='".$username."' and password='".md5($password)."'";

	$rest = mysqli_query($koneksi, $sql);

	if ($rest)
	{

		if ($rest->num_rows > 0) 
		{
			$dt = $rest->fetch_array();

			session::set('idadmin', $dt[0]);

			echo json_encode([
		        'status'    => 'OK',
		        'message'   => session::get('idadmin'),
		    ]);

		}
		if (empty($rest->num_rows))
		{
			
			echo json_encode([
		        'status'    => 'ERROR',
		        'message'   => 'Username atau Password yang Anda Masukan Salah',
		    ]);
		    
		}

	}
	else 
	{
		echo json_encode([
	        'status'    => 'ERROR',
	        'message'   => mysqli_error($koneksi),
	    ]);
	}

} 
else 
{

	echo json_encode([
        'status'    => 'ERROR',
        'message'   => 'Username atau Password Kosong',
    ]);

}