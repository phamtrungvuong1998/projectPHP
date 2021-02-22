<?php
class Post extends Controller{
	public function get(){
		return $this->model("PostModel");
	}
	public function Home(){
		$post = $this->get();
		$result = $post->getList();

		$this->view("Post", ['result' => $result]);
	}

	public function PostAdd(){
		$this->view("PostAdd");
	}

	public function PostAddProcess(){
		if (isset($_POST['add'])) {
			$postAdd = $this->get();
			$result = $postAdd->postAdd($_POST['title'], $_POST['description'], $_POST['content'], $_SESSION['login']['id']);
			header("Location: http://localhost:8080/Project_php_26/Post/Home");
		}
	}
}

?>