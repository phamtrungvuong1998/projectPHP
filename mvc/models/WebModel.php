<?php
class WebModel extends Connection{
	public function Home(){
		$query = "SELECT * FROM posts";
		return $this->con->query($query);
	}

	public function detail($id){
		$query = "SELECT * FROM posts WHERE id = " . $id;
		return $this->con->query($query);
	}
}
?>