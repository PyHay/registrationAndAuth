<?php

	session_start();
	require_once 'connect.php';


	$full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
	$login = mysqli_real_escape_string($connect, $_POST['login']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	$password_confirm = mysqli_real_escape_string($connect, $_POST['password_confirm']);

	if ($password === $password_confirm) {

		$path = 'uploads/' . time() .  $_FILES['avatar']['name'];
		if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
			$_SESSION['message'] = 'Ошибка при загрузке фото';
			header('Location: ../register.php');
		}

		$password = md5($password);

		mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name' , '$login', '$email', '$password', '$path')");
		$_SESSION['message'] = 'Теперь вы зарегестрированны!';
		header('Location: ../index.php');

	}else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../register.php');
	}

?>
