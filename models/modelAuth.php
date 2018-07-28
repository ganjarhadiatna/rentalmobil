<?php
class modelAuth
{
 	public function login($username, $password)
	{
		$cn = new database();
		if ($cn->cn()) {
			$q = $cn->conn->query("select id_admin, username from admin where username='".$username."' and password='".md5($password)."'");
			if ($q->num_rows > 0) {
				return $q->fetch_array();
			}
			else if (empty($q->num_rows)) {
				return 'Username atau password salah';
			} else {
				return $cn->conn->error;
			}
		} else {
			return $cn->conn->error;
		}
		$cn->cl();
	}

}
