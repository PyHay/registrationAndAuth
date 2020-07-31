<?php

	session_start();
	require_once 'connect.php';

	$login = mysqli_real_escape_string($connect, $_POST['login']);
	$password = mysqli_real_escape_string($connect, md5($_POST['password']));

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
		echo mysqli_error($connect);
	if(mysqli_num_rows($check_user) > 0){

		$user = mysqli_fetch_assoc($check_user);

		$_SESSION['user'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"avatar" => $user['avatar'],
			"email" => $user['email']
		];

		header('Location: ../profile.php');

	}else{

			$_SESSION['message'] = 'Ошибка авторизации';
			header('Location: ../index.php');

	}
?>
