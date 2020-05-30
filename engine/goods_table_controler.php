<?php

$search = trim(strip_tags($_GET['search'])) ?? NULL;
$searchBy = $_GET['searchBy'] ?? NULL;
$sort = trim(strip_tags($_GET['sort'])) ?? NULL;
$sortOrder = trim(strip_tags($_GET['radioOrder']));
$isActive = $_GET['isActive'];
$priceMin = (int)trim(strip_tags($_GET['priceMin'])) ?? NULL;
$priceMax = (int)trim(strip_tags($_GET['priceMax'])) ?? NULL;

//сборка запроса
$search_query = "SELECT * FROM goods";
//подставляем WHERE только при необходимости
$search_query .= ($search or $search && $searchBy or $isActive or $priceMin || $priceMax) ? ' WHERE' : '';

//функции-модули
$search_query .= getActive($isActive);

//подстановка AND
$search_query .= ($isActive and $priceMin || $priceMax) ? ' AND' : '';

//функции-модули
$search_query .= getPrice($priceMin, $priceMax);
$search_query .= getSearchBy($searchBy, $search);
$search_query .= getSort($sort, $sortOrder) ;

//завершаем точкой с запятой, конечно
$search_query .= ';';

//выполнение запроса в БД
$goods = getAssocResult($search_query);

if (count($goods) == 0) {
	$isGoodsEmpty = true;
}