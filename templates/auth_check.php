<?php

if (!$_SESSION['isAuth']){
	echo '<h5 class="m-3 alert alert-danger">Доступ к контенту ограничен! <a href="login.php">Войдите</a>, чтобы продолжить </h5>';
	include TEMPLATES_DIR.'footer.php';
	die;
}
 ?>

<h5 class="m-1 alert alert-info">Капитан <?=$_SESSION['user_name']?>, добро пожаловать на борт! </h5>
