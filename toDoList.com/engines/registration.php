<?php 
	$password = $_POST['password'];
	$email = $_POST['email'];
	$confirm_password = $_POST['confirm_password'];
	session_start();
	if(isset($password) && isset($email) && isset($confirm_password)){
		if(!empty($password) && !empty($email) && !empty($confirm_password)){
			if ($password = $confirm_password){
				registrateToDB($email, $password);
			}
		}else{
			$_SESSION['error'] = 'Email password and confirm password cant be ampty!';
		}
	}else{
		$_SESSION['error'] = 'Request with wring params';
	}
	header('Location: http://toDolist.com');

	function registrateToDB($email, $password) {
		$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
		if ($connect) {
			if (!userNotExists($email, $connect)){
				if (saveUserToDB ($email, $password, $connect)){
					$_SESSION['success'] = 'you have been registrated! Try to lo in';
				}
			}
		}
	}
	function userNotExists($email, $connect){
		$query = "SELECT * FROM users WHERE email='$email';";
		$result = mysqli_query($connect, $query);
		return mysqli_num_rows($result) > 0;
	}
	function saveUserToDB($email, $password, $connect){
		$query = "INSERT INTO `users`(email, password) VALUES('$email', '$password');";
		$result = mysqli_query($connect, $query);
		return $result;
	}
?>