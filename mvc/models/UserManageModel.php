<?php
class UserManageModel extends Connection{
	public function getList(){
		$query = "SELECT * FROM users";
		return $this->con->query($query);
	}

	public function delete($id){
		$query = "DELETE FROM users WHERE id = " . $id;
		return $this->con->query($query);
	}
}
?>