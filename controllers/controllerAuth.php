<?php
require '../config/session.php';
require '../models/modelAuth.php';

class controllerAuth
{
    function login($username, $password)
    {
    	$ss = new session();
    	$md = new modelAuth();


    	if (isset($username) && isset($password)) {
    		
    		$rest = $md->login($username, $password);

    		if (is_array($rest)) {
    			
    			//setting session
	    		$ss->start();
	    		$ss->set('idadmin', $rest[0]);

	    		return $ss->get('idadmin');

    		} else {
    			return $rest;
    		}

    	} else {
    		return 'username or password undegined';
    	}
    }

    function logout()
    {
    	$ss = new session();
    	$ss->end();
    	return 'ok';
    }
}

/*$ss = new session();
$n = new controllerAuth();
$dt = $n->login('admin', 'admin');
echo $dt;
echo $ss->get('idadmin');*/
