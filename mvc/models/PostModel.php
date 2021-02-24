<?php
class PostModel extends Connection{
	public function getList($index){
		if ($index == 2) {
			$query = "SELECT * FROM posts";
			 return $this->con->query($query);
		}else{
			$query = "SELECT posts.id, title, posts.created_at FROM posts INNER JOIN users ON posts.user_id = " . $_SESSION['login']['id'] . " AND " . "users.id = " . $_SESSION['login']['id'];
			return $this->con->query($query);
		}
	}

	public function getIdPost(){
		$query = "SELECT * FROM posts INNER JOIN users ON posts.user_id = " . $_SESSION['login']['id'] . " AND " . "users.id = " . $_SESSION['login']['id'];
		
	}

	public function deletePost($id){
		$query = "DELETE FROM posts WHERE id = " . $id;
		return $this->con->query($query);
	}

	public function postAdd($title, $description, $content, $getId, $slug, $category_id){
		$query = "INSERT INTO `posts` (`id`, `title`, `description`, `thumbnail`, `content`, `slug`, `view_count`, `user_id`, `category_id`, `created_at`) VALUES (NULL, '$title', '$description', '/anh.png', '$content', '$slug', '0', '$getId', '$category_id', '2021-01-12 20:14:55')";
		return  $this->con->query($query);

	}

	public function category($name, $parent_id, $description, $slug){
		$query1 = "INSERT INTO `categories` (`id`, `name`, `parent_id`, `thumbnail`, `slug`, `description`, `created_at`) VALUES (NULL, '$name', '$parent_id', '/thoisu.png', '$slug', '$description', '2021-02-17 22:43:08')";
		return $this->con->query($query1);
	}

}
?>