<?php
session_start([
//	'read_and_close' => true,
//	'write_and_close' => true
]);

setcookie('name', 'Vasya', time()-1);

var_dump($_COOKIE);

$_SESSION['email'] = '1@mail.ru';
print_r($_SESSION);




$password = '12345';

//echo password_hash($password, PASSWORD_DEFAULT);
$passwordHash = '$2y$12$vhLh7Ts09k478Waix2XnpOvt5x6BR3B1knZVP6oCe7e1NIU6f8TCm';


$isAuth = password_verify($password, $passwordHash);

if ($isAuth) {
	echo 'Пароль верен! Вы вошли';
	$_SESSION['isAuth'] = true;
}
else {
	echo 'Пароль неверен! Попробуйте еще раз!';
}


session_write_close();