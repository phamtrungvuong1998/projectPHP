<?php
class Account extends Controller{
	public function Home(){
		$AccountModel = $this->model("AccountModel");

		$result = $AccountModel->get();


		$this->view("Account", ['result' => $result]);

	}
}
?>