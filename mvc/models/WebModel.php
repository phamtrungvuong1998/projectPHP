<?php
class WebModel extends Connection{
	public function Home(){
		$query = "SELECT * FROM posts";
		return $this->con->query($query);
	}
}
?>