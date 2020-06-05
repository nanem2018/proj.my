<?php
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);
?>
<?
$user_name = trim(strip_tags($_POST['first_name']));
$user_login = trim(strip_tags($_POST['display_name']));
$user_password = trim(strip_tags($_POST['reg_pass']));
$user_email = trim(strip_tags($_POST['reg_email']));

if ($user_name && $user_login && $user_password && $user_email) {
	$insert_query = sprintf("INSERT INTO `users` (`user_name`, `user_login`, `user_password`, `user_email`)  VALUES (\"%s\", \"%s\",\"%u\",\"%s\");", $user_name, $user_login, $user_password, $user_email);
	executeQuery($insert_query);
}

header("location: /index.php");

die;

?>