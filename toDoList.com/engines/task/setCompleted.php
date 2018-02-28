<?php
if (isset($_POST['id']) && !empty($_POST['id'])){
	$id = $_POST['id'];
	$is_completed = $_POST['is_completed'];
	setCompleted($id, $is_completed);
}
function setCompleted($id, $is_completed){
	// var_dump($id);
	// var_dump($is_completed);
	$int_is_completed = intval($is_completed);
	$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
	$query = "UPDATE `tasks` SET is_completed='$is_completed' WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	if ($result) {
		$_SESSION['success'] = 'Task update';
	}else{
		$_SESSION['error'] = 'sumsing not wrong';
	}
	header('Location: http://toDolist.com/toDolists.php');
 }