<?php 
session_start();
	function addTask(){
	 	$text = $_POST['text_task'];
	 	$todolist_id = $_POST['todolist_id'];
	 	$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
	 	$query = "INSERT INTO `tasks`(title, todolist_id) VALUES('$text', '$todolist_id')";
	 	$result = mysqli_query($connect, $query);
	 	if ($result){
	 		$_SESSION['success'] = 'Create task!';
			header('Location: http://toDolist.com/toDolists.php');
	 	}else{
	 		$_SESSION['error'] = 'Create not good!';
			header('Location: http://toDolist.com/toDolists.php');
	 	}
	 }
	 addTask();
?>