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

function getClient($id)
{
	$db = openDatabaseConnection();
	$sql ="SELECT client_id FROM clients";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}



function deleteClients($id)
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	return true;
}


function updateClients($id)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE clients SET name = :name, name2 = :name2 WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":name", $answers['name']);
	$query->bindParam(":name2", $answers['name2']);
	header('location: ' . URL . 'clients/index');
	$query->execute();
	
}

function saveCreatedClient($values){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:client_firstname, :client_lastname);";
	// var_dump($answers);

	//"INSERT INTO birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":client_firstname", $values['client_firstname']);
	$query->bindParam(":client_lastname", $values['client_lastname']);
	$query->execute();
	return true;
}

?>