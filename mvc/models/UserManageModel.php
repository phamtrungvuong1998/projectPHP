<?php
class UserManageModel extends Connection{
	public function getList(){
		$query = "SELECT * FROM users WHERE level = 1";
		return $this->con->query($query);
	}

	public function delete($id){
		$query = "DELETE FROM users WHERE id = " . $id;
		return $this->con->query($query);
	}

	public function staffGetList(){
		$query = "SELECT * FROM users WHERE level = 2";
		return $this->con->query($query);
	}

	public function updateStaff($id){
		$query = "UPDATE users SET level = '2' WHERE id = " . $id;
		return $this->con->query($query);
	}
}
?>