<?php
class UserModel extends Connection{
	public function getUsers($index){
		if ($index == 2) {
			$query = "SELECT * FROM users";
			return $this->con->query($query);
		}else{
			$query = "SELECT * FROM users WHERE id = " . $_SESSION['login']['id'];
			return $this->con->query($query);
		}
	}

	public function deleteUser($id){
		$query = "DELETE FROM users WHERE id = " . $id;
		return $this->con->query($query);
	}

	public function editAcc($name, $email, $pass){
		$query = "UPDATE users SET name = '$name', email = '$email', password = '$pass' WHERE id = " . $_SESSION['login']['id'];
		return $this->con->query($query);
	}
}

?>