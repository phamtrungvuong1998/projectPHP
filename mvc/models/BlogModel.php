<?php
class BlogModel extends Connection{
	public function Home(){
		$query = "SELECT * FROM posts";
		return $this->con->query($query);
	}

	public function detail($id){
		$query = "SELECT * FROM posts WHERE id = " . $id;
		return $this->con->query($query);
	}

	public function searchModel($slug){
		$query = "SELECT * FROM posts WHERE slug LIKE '%$slug%';";
		return $this->con->query($query);
	}

	public function getCategory($parent){
		$query = "SELECT * FROM posts WHERE category_id = " . $parent;
		return $this->con->query($query);
	}
}
?>