<?php
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);
?>
<?
$user_name = safe($_POST['first_name']);
$user_login = safe($_POST['display_name']);
$user_pass = $_POST['reg_pass'];
$user_email = safe($_POST['reg_email']);



$user_password=password_hash($user_pass, PASSWORD_BCRYPT); //хэшируем пароль

if ($user_name && $user_login && $user_password && $user_email) {
	$insert_query = sprintf("INSERT INTO `users` (`user_name`, `user_login`, `user_password`, `user_email`)  VALUES (\"%s\", \"%s\",\"%s\",\"%s\");", $user_name, $user_login, $user_password, $user_email);
	executeQuery($insert_query);
}

header("location: /index.php");

die;

?>