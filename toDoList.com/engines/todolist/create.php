<?php 
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
	 	$default_title = 'My todolist';
	 	$user_id = $_SESSION['id'];
	 	function addTodoList($user_id, $default_title) {
	 		$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
	 		$query = "INSERT INTO `todolists`(title, user_id) VALUES('$default_title', '$user_id')";
	 		createToDo($connect,$query);
	 	}
	 	function createToDo($connect,$query){
	 		$result = mysqli_query($connect, $query);
			if ($result){
				$_SESSION['success'] = 'Create to do succes!';
				header('Location: http://toDolist.com/toDolists.php');
			}else{
				$_SESSION['error'] = 'Create not good!';
				header('Location: http://toDolist.com/toDolists.php');
			}
	 	} 
	 	addTodoList($user_id, $default_title);
 	}else{
 	$_SESSION['error'] = "error";
     header('Location: http://toDolist.com');
  }
 ?>