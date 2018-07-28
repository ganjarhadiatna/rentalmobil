<?php 
class session
{
	public function start()
	{
		session_start();
		ini_set('error_reporting', 0);
		//ini_set('display_errors', 0);
	}
	public function set($path, $value)
	{
		self::start();
		$_SESSION[$path] = $value;
	}
	public function get($path)
	{
		self::start();
		if (isset($_SESSION[$path])) {
			return $_SESSION[$path];
		} else {
			self::set($path, '');
			return $_SESSION[$path];
		}
	}
	public function cek($path)
	{
		self::start();
		if (!isset($_SESSION[$path])) {
			self::set($path, '');
		}
	}
	public function end()
	{
		self::start();
		session_destroy();
	}
}
