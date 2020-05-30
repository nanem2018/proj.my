<?php

function myDB_connect()
{
	$config = getDB_config_gb();
	$db = mysqli_connect(
		$config['db_host'],
		$config['db_user'],
		$config['db_pass'],
		$config['db_name']
	);

	return $db;
}

function getAssocResult(string $query)
{
	$result = executeQuery($query);
	$return = [];
	if (mysqli_num_fields($result) > 0) {
		while ($row = mysqli_fetch_assoc($result))
			$return[] = $row;

		return $return;
	}
}

function executeQuery(string $query)
{
	$db = myDB_connect();

	$result = mysqli_query($db, $query);

	mysqli_close($db);
	return $result;
}
