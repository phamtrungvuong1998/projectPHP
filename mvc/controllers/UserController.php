<?php
class UserController extends Controller{
	public function get(){
		return $this->model("UserModel");
	}

	public function getList($number){
		$getList = $this->get();
		$result = $getList->getUsers($number);
		if ($number == 2) {
			$this->view("Users", ['result' => $result]);
		}else{
			$this->view("Account", ['result' => $result]);
		}
		
	}

	public function delete($getId){
		$delete = $this->get();
		$result = $delete->deleteUser($getId);
		header("Location: http://localhost:8080/Project_php_26/UserController/getList/2");

	}

	public function editAccount(){
		$editAcc = $this->get();
		$result = $editAcc->editAcc($_POST['name'], $_POST['email'], $_POST['pass']);
		$_SESSION['login']['name'] = $_POST['name'];
		header("Location: http://localhost:8080/Project_php_26/UserController/getList/1");
	}
}
?>