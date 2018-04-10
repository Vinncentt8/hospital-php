<?php
function getAllClients()
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
	$sql ="SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetch(PDO::FETCH_ASSOC);
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


function updateClient($answers)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname, phone = :phone, email = :email WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->bindParam(":client_firstname", $answers['name']);
	$query->bindParam(":client_lastname", $answers['name2']);
	$query->bindParam(":phone", $answers['phone']);
	$query->bindParam(":email", $answers['email']);
	$query->bindParam(":client_id", $answers['client_id']);
	$query->execute();
	return true;
	
}

function saveCreatedClient($values){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname, phone, email) VALUES (:client_firstname, :client_lastname, :phone, :email);";
	// var_dump($answers);

	//"INSERT INTO birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":client_firstname", $values['client_firstname']);
	$query->bindParam(":client_lastname", $values['client_lastname']);
	$query->bindParam(":phone", $values['phone']);
	$query->bindParam(":email", $values['email']);
	$query->execute();
	return true;
}



?>