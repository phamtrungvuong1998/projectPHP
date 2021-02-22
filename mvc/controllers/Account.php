<?php
class Account extends Controller{
	public function get(){
		return $this->model("AccountModel");
	}

	public function Home(){
		$AccountModel = $this->get();

		$result = $AccountModel->get();


		$this->view("Account", ['result' => $result]);

	}

	public function editAccount(){
		$editAcc = $this->get();
		$result = $editAcc->editAcc($_POST['name'], $_POST['email'], $_POST['pass']);
		$_SESSION['login']['name'] = $_POST['name'];
		header("Location: http://localhost:8080/Project_php_26/Account/Home");
	}
}
?>