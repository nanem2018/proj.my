<?php
/*
$search = safe($_GET['search']) ?? NULL;
$searchBy = $_GET['searchBy'] ?? NULL;
$sort = safe($_GET['sort']) ?? NULL;
$sortOrder = safe($_GET['radioOrder']);
$isActive = $_GET['isActive'];
$priceMin = (int)safe($_GET['priceMin']) ?? NULL;
$priceMax = (int)safe($_GET['priceMax']) ?? NULL;
*/
//сборка запроса
$search_query = "SELECT * FROM users";

//подставляем WHERE только при необходимости
//$search_query .= ($search or $search && $searchBy or $isActive or $priceMin || $priceMax) ? ' WHERE' : '';

$search_query .= ';';

//выполнение запроса в БД
$users = getAssocResult($search_query);
