<?php
class LoginController extends Controller{
	public function get(){
		return $this->model("LoginModel");
	}
	public function Home(){
		$this->view("login", ['styleLogin' => 1]);
	}

	public function loginProcess(){

		if (isset($_POST['login'])) {
			$loginProcess = $this->get();
			$result = $loginProcess->loginProcessModel($_POST['email'], $_POST['pass']);
			$row = $result->fetch_assoc();
			if (is_array($row)) {
				$_SESSION['login'] = $row;
				header("Location: http://localhost:8080/Project_php_26/Dashboard");
			}else{
				$this->view("login", ['styleLogin' => 2]);
			}	
		}
	}

	public function register(){
		$this->view("register", [
			'style1' => 1,
			'style2' => 1,
		]);
	}

	public function registerProcess(){
		if (isset($_POST['register'])) {
			$registerCheck = $this->get();
			$result = $registerCheck->registerCheck($_POST['email']);
			$row = $result->fetch_assoc();
			if (is_array($row)) {
				$this->view("register", ['style1' => 2] );
			}else if($_POST['pass'] != $_POST['repass']){
					$this->view("register", ['style2' => 2]);
				}else{
					$registerProcess = $this->model("LoginModel");
					$result = $registerProcess->RegisterModel($_POST['name'], $_POST['email'], $_POST['pass']);

					header("Location: http://localhost:8080/Project_php_26/LoginController/Home");
				}
			}
		}
	

	public function logout(){
		session_destroy();
		header("Location: http://localhost:8080/Project_php_26/");
	}

}

?>	