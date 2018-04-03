<?php

function getAllSpecies()
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();

}

function getSpecies($id)
{
	$db = openDatabaseConnection();
	$sql ="SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetch(PDO::FETCH_ASSOC);

}

function saveCreatedSpecie($values){
	$db = openDatabaseConnection();

	var_dump($_POST);
	$sql = "INSERT INTO species (species_description) VALUES (:species_description);";
	$query = $db->prepare($sql);
	$query->bindParam(":species_description", $save['species_description']);
	$query->bindParam(":id", $id);
	return true;
}

function updateSpecies($save)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE species SET species_description = :species_description WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->bindParam(":species_description", $save['species_description']);
	$query->bindParam(":species_id", $save['species_id']);
	$query->execute();
	return true;
	
}



function deleteSpecies($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	return true;
}



?>