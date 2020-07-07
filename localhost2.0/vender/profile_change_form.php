
<!DOCTYPE html>
<html>
<head>
	<title>Изменеие данных</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body>
  <form action="profile_change_function.php?id=<?php echo $_GET['id'] ?>" method="POST">
  <input type="text" name="name" placeholder="Новое имя">
  <input type="password" name="password" placeholder="Новый пароль">
  <input type="submit" value="Готово">
  </form>

</body>
</html>
