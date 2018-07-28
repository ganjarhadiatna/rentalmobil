<?php
class modelAuth
{
 	public function login($username, $password)
	{
		$cn = new database();
    	$rest = $cn->query("select id_admin, username from admin where username='".$username."' and password='".md5($password)."'");
    	if ($rest) {
    		if ($rest->num_rows > 0) {
				return $rest->fetch_array();
			}
			else if (empty($rest->num_rows)) {
				return 'Username atau password salah';
			} else {
				return $cn->conn->error;
			}
    	}
	}

}
