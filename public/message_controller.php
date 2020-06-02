<?php
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

$add_name = trim(strip_tags($_POST['add_name']));
$add_desc = trim(strip_tags($_POST['add_desc']));
$add_price = (int)trim(strip_tags($_POST['add_price']));
$add_isActive = (int)$_POST['add_isActive'];

if ($add_name && $add_desc && $add_price) {

	$insert_query = sprintf("INSERT INTO `goods` (`good_name`, `good_description`, `good_price`, `is_active`) VALUES (\"%s\", \"%s\", %u, %u);", $add_name, $add_desc, $add_price, $add_isActive);
	executeQuery($insert_query);
}

header("location: /index.php");

die;