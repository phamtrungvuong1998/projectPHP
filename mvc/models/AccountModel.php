<?php
class AccountModel extends Connection{
	public function get(){
		$query = "SELECT * FROM users WHERE id = " . $_SESSION['login']['id'];
		return $this->con->query($query);
	}

	public function editAcc($name, $email, $pass){
		$query = "UPDATE users SET name = '$name', email = '$email', password = '$pass' WHERE id = " . $_SESSION['login']['id'];
		return $this->con->query($query);
	}
}

?>