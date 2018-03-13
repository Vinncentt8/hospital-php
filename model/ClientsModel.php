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

function deleteClients($id)
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	return true;
}





?>