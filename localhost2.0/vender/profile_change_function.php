<?php
session_start();
if(!$_SESSION['user']){
  header('Location: index.php');
}
	require_once 'connect.php';

	if(isset($_POST['name'])){
		$name = mysqli_real_escape_string($connect, $_POST['name']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);
    $password = md5($password);
		$id = mysqli_real_escape_string($connect, $_GET['id']);

		mysqli_query($connect, "UPDATE users SET full_name = '$name', password = '$password' WHERE id = '$id'");
	}
  $_SESSION['message'] = 'Данные успешно измененны!';
  header('Location: ../change_users.php');
?>
