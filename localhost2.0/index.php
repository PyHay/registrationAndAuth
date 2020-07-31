<?php

	session_start();
	if($_SESSION['user']){
		header('Location: profile.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

<form action="vender/signin.php" method="post">
	<label>Логин</label>
	<input type="text" placeholder="your login" name="login">
	<label>Пароль</label>
	<input type="password" placeholder="your password" name="password">
	<button type="submit">Войти</button>
	<p>Нет аккаунта?<a href="register.php"> Зарегистрируйтесь </a></p>
		<?php
		if($_SESSION['message']){
		echo '<p class="msg">' . $_SESSION['message'] . ' </p>';
	}
		unset($_SESSION['message']);

		?>
</form>

</body>
</html>
