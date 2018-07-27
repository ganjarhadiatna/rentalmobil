<?php
//include controllers
require '../config/url.php';
require '../controllers/controllerAuth.php';

//define class
$auth = new controllerAuth();


//define route
$type = $_REQUEST['type'];
$path = $_REQUEST['path'];

if (isset($type) && isset($path)) {

	//list API post
	if ($type == 'post') {

		if ($path == 'login') {
		
			echo $auth->login($_POST['username'], $_POST['password']);

		}

	}

	//list API get
	if ($type == 'get') {

		if ($path == 'logout') {
			echo $auth->logout();
		}

	}

} else {

	echo 'API error';

}
