<?php
function getClients()
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}







?>