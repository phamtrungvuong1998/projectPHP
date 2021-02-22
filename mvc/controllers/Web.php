<?php
class Web extends Controller{
	public function get(){
		return $this->model("WebModel");
	}

	public function Home(){
		$get = $this->get();
		$result = $get->Home();
		$this->view("WebIndex", ['result' => $result]);
	}

	public function detail($getID){
		$detail = $this->get();
		$result = $detail->detail($getID);
		$this->view("WebDetail", ['result' => $result]);
	}
}
?>