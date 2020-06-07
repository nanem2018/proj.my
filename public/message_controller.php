<?php
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

$mess_name = trim(strip_tags($_POST['mess_name']));
$mess_desc = trim(strip_tags($_POST['mess_desc']));
$mess_mail = trim(strip_tags($_POST['mess_mail']));
$mess_text = trim(strip_tags($_POST['mess_text']));

if ($mess_name && $mess_desc && $mess_mail) {

	$insert_query = sprintf("INSERT INTO `mess` (`mess_name`, `mess_desc`, `mess_mail`, `mess_text`)  VALUES (\"%s\", \"%s\",\"%s\",\"%s\");", $mess_name, $mess_desc, $mess_mail, $mess_text);
	executeQuery($insert_query);
}

header("location: /index.php");

die;