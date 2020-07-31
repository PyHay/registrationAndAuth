<?php

	session_start();

	if($_SESSION['user']){
		header('Location: profile.php');
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

<form action="/vender/signup.php" method="post" enctype="multipart/form-data">
	<label>ФИО</label>
	<input type="text" placeholder="введите имя" name="full_name">
	<label>Логин</label>
	<input type="text" placeholder="введите логин" name="login">
	<label>Почта</label>
	<input type="email" placeholder="введите почту" name="email">
	<label>изображение профиля</label>
	<input type="file" name="avatar">
	<label>Пароль</label>
	<input type="password" placeholder="введите пароль" name="password">
	<label>Подтверждение пароля</label>
	<input type="password" placeholder="подтвердите пароль" name="password_confirm">
	<button type="submit">Enter</button>
	<p>Уже есть аккаунт?<a href="index.php"> Авторизируйтесь </a></p>
	<?php
		if($_SESSION['message']){
		echo '<p class="msg">' . $_SESSION['message'] . ' </p>';
	}
		unset($_SESSION['message']);

		?>
</form>

</body>
</html>
