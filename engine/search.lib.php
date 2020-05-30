<?php
//функция для идентификации пустоты строки поиска
function isSearch()
{
	return (bool)$_GET['search'];
}

//функция товаров в наличии
function getActive($isActive)
{
	return $isActive ?
		(isSearch() ? " is_active = 1 AND" : " is_active = 1")
		: '';

}

//функция поиска по определенным полям
function getSearchBy($searchBy, $search)
{
	if (!isSearch()) {
		return '';
	}

	$searchBy = $searchBy ?? ['good_name'];
	if (count($searchBy) == 1) {
		return " $searchBy[0] LIKE \"%$search%\"";
	}

	$getWhere = "";

	foreach ($searchBy as $key => $value) {
		if ($key == 0) {
			$getWhere .= " $value LIKE \"%$search%\"";
			continue;
		}
		$getWhere .= " OR $value LIKE \"%$search%\"";
		continue;
	}

	return $getWhere;
}

//функция сортировки
function getSort($sort, $sortOrder)
{
	switch ($sort) {
		case 2:
			return getOrder('good_name', $sortOrder);
		case 3:
			return getOrder('good_id', $sortOrder);
		case 1:
		default:
			return getOrder('good_price', $sortOrder);
	}
}

//вспомогательная функция направления сортировки
function getOrder($name, $sortOrder)
{
	if ($sortOrder == 'down') {
		return " ORDER BY {$name} DESC";
	}
	/** пасхалка :) */
	return " ORDER BY {$name} ";
}
//функция ценового диапазона
function getPrice(int $priceMin,int $priceMax) {
$priceLimits = setMinMaxPrice();
if (!$priceMin && !$priceMax)
	return '';
if ($priceMin <= $priceMax && $priceMin>=0) {
	$priceMin = $priceMin ?? $priceLimits[0];
	$priceMax = $priceMax ?? $priceLimits[1];

	return " good_price BETWEEN $priceMin AND $priceMax";
}
return '';
}

//вспомогательная функция отправки переменных на JS
function setMinMaxPrice() {
	$maxPrice = getAssocResult('SELECT MAX(good_price) FROM goods LIMIT 1;')[0]['MAX(good_price)'];
	$minPrice = getAssocResult('SELECT MIN(good_price) FROM goods LIMIT 1;')[0]['MIN(good_price)'];
echo "<script type=\"text/javascript\" language=\"JavaScript\">
      var minP = $minPrice;
      var maxP = $maxPrice;
	</script>";
return [$minPrice, $maxPrice];
}
