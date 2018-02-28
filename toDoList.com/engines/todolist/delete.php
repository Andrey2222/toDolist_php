<?php 
	session_start();
	$id = $_POST['id'];
	if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
		 $_SESSION['success'] = 'delete sucsec!';
		 deleteTodoList($id);
	 	}else{
	 	$_SESSION['error'] = "error";
	     header('Location: http://toDolist.com');
	  }
	  header('Location: http://toDolist.com/todolists.php');

	 function deleteTodoList($id) {
		 $connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
		 $query = "DELETE FROM `todolists` WHERE id='$id'";
		 $result = mysqli_query($connect, $query);
	}
 ?>