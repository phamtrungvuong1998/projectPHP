<?php
class PostManageModel extends Connection{
	public function getList(){
		$query = "SELECT * FROM posts";
		return $this->con->query($query);
	}

	public function delete($id){
		$query = "DELETE FROM posts WHERE id = " . $id;
		return $this->con->query($query);
	}
}
?>