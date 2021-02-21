<?php
class Connection{
	protected $con;
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "blog_php";

	function __construct(){
		$this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if($this->con->connect_errno){
				echo "Failed to connect to mySQL : " . $con->connerct_errno;
				exit();
			}
			return $this->con;
	}
}

?>