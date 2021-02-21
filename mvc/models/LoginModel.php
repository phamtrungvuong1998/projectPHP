<?php
	class LoginModel extends Connection{
		public function loginProcessModel($email, $pass){
			$query = "SELECT * FROM `users` WHERE `email` ='$email' AND `password` = '$pass'";
			return $this->con->query($query);
		}

		public function RegisterModel($name, $email, $pass){
			$query = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `created_at`) VALUES (NULL, '$name', '$email', '$pass', '/anh.png', '2021-02-17 22:10:21')";
			return $this->con->query($query);
		}

		public function registerCheck($email){
			$query = "SELECT * FROM `users` WHERE `email` ='$email'";
			return $this->con->query($query);
		}
	}

?>