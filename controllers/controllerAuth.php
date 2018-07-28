<?php
require_once '../models/modelAuth.php';

class controllerAuth
{
    function login($username, $password)
    {

    	if (isset($username) && isset($password)) {
    		
    		$rest = modelAuth::login($username, $password);

    		if (is_array($rest)) {
    			
    			//setting session
	    		session::set('idadmin', $rest[0]);

	    		return session::get('idadmin');

    		} else {
    			return $rest;
    		}

    	} else {
    		return 'username or password undefined';
    	}
    }

    function logout()
    {
    	session::end();

    	return 'ok';
    }
}
