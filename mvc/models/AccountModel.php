<?php
class AccountModel extends Connection{
	public function get(){
		$query = "SELECT * FROM users WHERE id = " . $_SESSION['login']['id'];
		return $this->con->query($query);
	}
}

?>