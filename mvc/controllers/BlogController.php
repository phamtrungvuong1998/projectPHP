<?php
class BlogController extends Controller{
	public function get(){
		return $this->model("BlogModel");
	}

	public function Home(){
		$get = $this->get();
		$result = $get->Home();
		$this->view("BlogIndex", ['result' => $result]);
	}

	public function detail($getID){
		$detail = $this->get();
		$result = $detail->detail($getID);
		$this->view("BlogDetail", ['result' => $result]);
	}

	public function search(){
		if (isset($_POST['search'])) {
			$search = $this->get();
			$result = $search->searchModel($_POST['search']);
			$this->view("BlogIndex", ['result' => $result]);
		}
	}

	public function getCategory($parent_id){
		$getCategory = $this->get();
		$result = $getCategory->getCategory($parent_id);
		$this->view("BlogIndex",['result' => $result]);

	}

	public function like(){
		
	}
}
?>