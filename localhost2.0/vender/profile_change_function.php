<?php
require_once 'connect.php';

if(isset($_POST['name'])){
mysqli_query($connect, 'UPDATE users SET full_name = '.$_POST['name'].', password = '.$_POST['password'].' WHERE id = '.$_GET['id']);

}
header('Location: ../change_users.php');
?>
