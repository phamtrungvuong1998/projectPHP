<?php
class UserManage extends Controller{
	public function Home(){
		$userManage = $this->model("UserManageModel");
		$result = $userManage->getList();
		$this->view("UserManage", ['result' => $result]);
	}

	public function delete($getId){
		$userManage = $this->model("UserManageModel");
		$result = $userManage->delete($getId);
		header("Location: http://localhost:8080/phamtrungvuong/UserManage");
	}
}
?>