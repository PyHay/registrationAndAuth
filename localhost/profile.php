<?php

	session_start();
	if(!$_SESSION['user']){
		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Профиль</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

<form action="vender/signin.php" method="post">
	<img src="<?= $_SESSION['user']['avatar'] ?>" width = 250px>
	<h1><?= $_SESSION['user']['full_name'] ?></h1>
	<a href="#"><?= $_SESSION['user']['email'] ?></a>
	<a href="vender/logout.php">Выход</a>
</form>

</body>
</html>