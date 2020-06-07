<?php


function isInactive(array $item) {
	return empty($item['is_active']);
}

function safe($data) {
	return htmlspecialchars(strip_tags(trim($data)));
}