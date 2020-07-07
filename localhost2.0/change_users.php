<!DOCTYPE html>
<html>
<head>
	<title>Редактирование</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
<div>
  <form>
  <?php

    require_once 'vender/connect.php';

    $sql = mysqli_query($connect, 'SELECT * FROM `users`');
    while ($result = mysqli_fetch_array($sql)) {
      echo "<a href = 'vender/profile_change_form.php?id={$result['id']}'> id: {$result['id']},</a> full_name:  {$result['full_name']}, login:  {$result['login']}, email: {$result['email']}, password:{$result['password']}<br>";
    }
  ?>

</form>

</body>
</html>
