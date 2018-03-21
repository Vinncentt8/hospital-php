<?php

function getSpecies()
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function saveCreatedSpecie($save){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species (species_description) VALUES (:species_description);";
	$query = $db->prepare($sql);
	$query->bindParam(":species_description", $save['species_description']);
	$query->execute();
	return true;
}

function updateSpecies($id)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE species SET species_description = :species_description WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->bindParam(":species_description", $save['species_description']);
	$query->bindParam(":species_id", $id);
	$query->execute();
	
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