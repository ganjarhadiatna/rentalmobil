<?php
	class database
	{
		private $hostname = '127.0.0.1';
		private $username = 'root';
		private $password = 'delapanbelas18';
		private $database = 'dbrental';
		public $conn = '';

		//connection
		public function cn()
		{
			$this->conn = mysqli_connect(
				$this->hostname, 
				$this->username, 
				$this->password, 
				$this->database);
			if ($this->conn) {
				return true;
			}
			if (!$this->conn) {
				return false;
			}
			if (mysqli_connect_errno()) {
				return "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		}
		public function cl()
		{
			return $this->conn->close();
		}

		//get user
		public function getAdmin()
		{
			if ($this->cn()) {
				$rest = $this->conn->query('select * from admin');
				if ($rest->num_rows > 0) {
					$data = json_encode($rest->fetch_array());
					return $data;
				}
			} else {
				return $this->conn->error;
			}
			$this->cl();
		}

		
	}
	