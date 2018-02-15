<?php
    session_start();
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
        include_once 'partials/_todolist.php';
    }else{
        header('Location: http://toDolist.com');
    }
?>








