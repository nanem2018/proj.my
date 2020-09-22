<?php

session_start();

$login = '';
$password = '';
$status = '';

if (isset($_POST['login']) && isset($_POST['password'])) {

	$login = $_POST['login'];
	$password = $_POST['password'];

	$user = getUser($login); // array

if ($user) {
	if (password_verify($password, $user['user_password'])) {
		$_SESSION['isAuth'] = true;
		$_SESSION['user_name'] = $user['user_name'];
		$_SESSION['user_login'] = $login;
		
		session_write_close();
	    header('location: /');	
		die;
	}
	else {
		$status = "Пароль неверный! Проверьте данные и повторите вновь!";

		$_SESSION['isAuth'] = false;
	}
}
else {
	$status = "Такого пользователя не существует! Проверьте данные и повторите вновь";

	$_SESSION['isAuth'] = false;
}

}


//session_write_close();

?>