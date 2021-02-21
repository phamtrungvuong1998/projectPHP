<?php
class App{

	//url là http://localhost:8080/phamtrungvuong/controller/action/param
	protected $controller = "Login";
	protected $action = "Home";
	protected $param = [];
	public function __construct(){
		$url = $this->urlProcess();
			
			if (!isset($_SESSION['login'])) {
				require_once './mvc/controllers/'.$this->controller.'.php';
				$this->controller = new $this->controller;
				if (method_exists($this->controller, $url[1])) {
					$this->action = $url[1];
				}
				call_user_func([$this->controller, $this->action]);
			}else{
				$this->controller = "Dashboard";
				//Xử lý controller
				if (file_exists("./mvc/controllers/".$url[0].".php")) {
					$this->controller = $url[0];
				}

				unset($url[0]);

				require_once './mvc/controllers/'.$this->controller.'.php';
				$this->controller = new $this->controller;

				//Xử lí action
				if (isset($url[1])) {
					if (method_exists($this->controller, $url[1])) {
						$this->action = $url[1];
						unset($url[1]);
					}
				}

				//Xử lý param
				$this->param = $url?array_values($url):[];

				call_user_func_array([$this->controller, $this->action], $this->param);
			}
		
	}

	//xử lý url
	
	public function urlProcess(){
		if (isset($_GET['url'])) {
			return explode("/", trim($_GET['url']));
		}
	}
}

?>