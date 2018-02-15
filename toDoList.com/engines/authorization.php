<?php 
	$login_password = $_POST['login_password'];
	$login_email = $_POST['login_email'];
	session_start();
	if(isset($login_password) && isset($login_email)) {
		if(!empty($login_password) && !empty($login_email)) {
			$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
			$query = "SELECT * FROM users WHERE email='$login_email' AND password='$login_password'";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['success'] = 'my congratuattion!';
				$_SESSION['id'] = getUserID($login_email, $connect);
				header('Location: http://toDolist.com/todolists.php');
			}else{
				header('Location: http://toDolist.com');
				$_SESSION['error'] = 'This user cant find in this DB!';
			}
		}else{
			header('Location: http://toDolist.com');
			$_SESSION['error'] = 'Email and password cant be ampty!';
		}
	}else{
		echo "c";
	}
	function getUserID($login_email, $connect){
		$query = "SELECT * FROM users WHERE email='$login_email' LIMIT 1";
		$result = mysqli_query($connect, $query);
		$record =  mysqli_fetch_assoc($result);
		return $record['id'];
	}
?>