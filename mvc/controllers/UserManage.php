<?php
class UserManage extends Controller{
	public function get(){
		return $this->model("UserManageModel");
	}

	public function Home(){
		$userManage = $this->get();
		$result = $userManage->getList();
		$this->view("UserManage", ['result' => $result]);
	}

	public function delete($getId){
		$userManage = $this->get();
		$result = $userManage->delete($getId);
		header("Location: http://localhost:8080/Project_php_26/UserManage");
	}

	public function staff(){
		$staff = $this->get();
		$result = $staff->staffGetList();
		$this->view("Staff", ['result' => $result]);
	}

	public function deleteStaff($getId){
		$userManage = $this->get();
		$result = $userManage->delete($getId);
		header("Location: http://localhost:8080/Project_php_26/UserManage/staff");
	}

	public function updateStaff(){
		$updateStaff = $this->get();
		$result = $updateStaff->updateStaff($_POST['update']);
		header("Location: http://localhost:8080/Project_php_26/UserManage/staff");
	}
}
?>