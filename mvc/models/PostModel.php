<?php
class PostModel extends Connection{
	public function getList(){
		$query = "SELECT * FROM posts INNER JOIN users ON users.id = " . $_SESSION['login']['id'] . " AND " . "posts.user_id = " . $_SESSION['login']['id'];
		return $this->con->query($query);
	}

	public function postAdd($title, $description, $content, $getId){
		$query = "INSERT INTO `posts` (`id`, `title`, `description`, `thumbnail`, `content`, `slug`, `view_count`, `user_id`, `category_id`, `created_at`) VALUES (NULL, '$title', '$description', 'dasd', '$content', 'sddas', '0', '$getId', '1', '2021-01-12 20:14:55');";
		return $this->con->query($query);

	}
}
?>