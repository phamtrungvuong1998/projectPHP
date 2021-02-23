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
		$cate = $_POST['category'];
		$slugPost = '';
		$strPost = explode(" ", trim($_POST['title']));
		for ($i=0; $i < count($strPost) ; $i++) { 
			if ($i == count($strPost) - 1) {
				$slugPost = $slugPost . $strPost[$i];
			}else{
				$slugPost = $slugPost . $strPost[$i] . "-";
			}
		}
		
		if ($cate == 1) {
			$name = "Tin Tức";
		}else if ($cate == 2) {
			$name = "Giáo dục";
		}else if ($cate == 3) {
			$name = "Xã hội";
		}else if ($cate == 4) {
			$name = "Kinh tế";
		}

		$slugCate = '';
		$strCate = explode(" ", trim($name));
		for ($i=0; $i < count($strCate) ; $i++) { 
			if ($i == count($strCate) - 1) {
				$slugCate = $slugCate . $strCate[$i];
			}else{
				$slugCate = $slugCate . $strCate[$i] . "-";
			}
		}



		if (isset($_POST['add'])) {
			$postAdd = $this->get();
			$categories = $postAdd->category($name, $cate, $_POST['description'], $slugCate);
			$result = $postAdd->postAdd($_POST['title'], $_POST['description'], $_POST['content'], $_SESSION['login']['id'], $slugPost, $cate);
			header("Location: http://localhost:8080/Project_php_26/Post/Home");
		}
	}

	public function delete($getID){
		$delete = $this->get();
 		$result1 = $delete->delete($getID);
		header("Location: http://localhost:8080/Project_php_26/Post/Home");
	}
}

?>