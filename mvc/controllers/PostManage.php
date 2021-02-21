<?php
class PostManage extends Controller{
	public function get(){
		return $this->model("PostManageModel");
	}

	public function Home(){
		$PostManage = $this->get();
		$result = $PostManage->getList();
		$this->view("PostManage", ["result" => $result]);
	}

	public function delete($getId){
		$PostManage = $this->get();
		$result = $PostManage->delete($getId);
		header("Location: http://localhost:8080/phamtrungvuong/PostManage");

	}
}
?>