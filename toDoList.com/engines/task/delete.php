<?php 
	// session_start();
// 	

  if (isset($_POST['id']) && !empty($_POST['id'])){
      $id = $_POST['id'];
     $response = deleteTask($id);
  }else{
    $response['error'] = 'there is no id given';
  }
  echo json_encode($response);


	function deleteTask($id){
	 	$id = $_POST['id'];
	 	$connect = mysqli_connect("localhost", "andrey", "nfywjh123", "toDolist");
	 	$query = "DELETE FROM `tasks` WHERE id='$id'";
	 	$result = mysqli_query($connect, $query);
	 	if ($result){
	 		$response['success'] = 'Task deleted';
	 	}else{
	 		 $response['error'] = 'there is no id given';
	 	}
	 	return $response;
		// header('Location: http://toDolist.com/todolists.php');
	 }
?>