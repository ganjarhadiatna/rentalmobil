<?php
class modelMobil
{
    function create($data)
    {
    	$cn = new database();
		if ($cn->cn()) {
			return json_encode($data);
		} else {
			return $cn->conn->error;
		}

		$cn->cl();
    }
}
