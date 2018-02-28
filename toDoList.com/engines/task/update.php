<?php 
	function updateTask(){
	 	$id = $_POST['id'];
	 	$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
	 	$query = "UPDATE `tasks` SET title='$task['Title']' WHERE id='$id'";
	 	$result = mysqli_query($connect, $query);
	 	if ($result){
	 		$_SESSION['success'] = 'delete task!';
	 	}else{
	 		$_SESSION['error'] = 'som not good!';
	 	}
		header('Location: http://toDolist.com/todolists.php');
	 }
	 updateTask();
?>