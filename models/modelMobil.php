<?php
class modelMobil
{
    function create($data = '')
    {
    	$cn = new database();
		if ($cn->cn()) {
			return 'connection success';
		} else {
			return $cn->conn->error;
		}

		$cn->cl();
    }
}
