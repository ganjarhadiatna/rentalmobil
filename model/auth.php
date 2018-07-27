<?php

require '../config/database.php';

/**
 * summary
 */
class auth extends database
{
 	//auth
 	public function auth($email, $password)
	{
		if ($this->cn()) {
			$q = $this->conn->query("select idusers, name from users where email='".$email."' and password='".md5($password)."'");
			if ($q->num_rows > 0) {
				while ($data = $q->fetch_array()) {
					$datas[] = $data;
				}
				return $datas;
			}
			elseif (empty($q->num_rows)) {
				return 'Empty';
			} else {
				return $this->conn->error;
			}
		} else {
			return $this->conn->error;
		}
		$this->cl();
	}

}