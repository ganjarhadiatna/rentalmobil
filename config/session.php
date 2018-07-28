<?php 
class session
{
	public function start()
	{
		/*if (is_null(session_start())) {
			return session_start();
		}*/
		return session_start();
	}
	public function set($path, $value)
	{
		$this->start();
		$_SESSION[$path] = $value;
	}
	public function get($path)
	{
		$this->start();
		if (isset($_SESSION[$path])) {
			return $_SESSION[$path];
		} else {
			$this->set($path, '');
			return $_SESSION[$path];
		}
	}
	public function cek($path)
	{
		$this->start();
		if (!isset($_SESSION[$path])) {
			$this->set($path, '');
		}
	}
	public function end()
	{
		$this->start();
		session_destroy();
	}
}
