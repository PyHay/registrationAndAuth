<?php
session_start();
if(!$_SESSION['user']){
  header('Location: index.php');
}
?>

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
<a href="index.php" style="padding:0;"><button style="margin-top:10px">Мой профиль</button></a>
<?php
if($_SESSION['message']){
echo '<p class="msg" style="margin-top:10px;">' . $_SESSION['message'] . ' </p>';
}
unset($_SESSION['message']);
?>
</body>
</html>
