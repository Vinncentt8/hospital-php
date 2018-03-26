<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM patients";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getpatient($id)
{
	$db = openDatabaseConnection();
	$sql ="SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetch(PDO::FETCH_ASSOC);
}



function deletePatients($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	return true;
}


function updatePatients($save){
	$db = openDatabaseConnection();
	
	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status  WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $save['patient_name']);
	$query->bindParam(":patient_status", $save['patient_status']);
	$query->bindParam(":patient_id", $save['patient_id']);
	$query->execute();
	return true;
}


function saveCreatedPatient($values){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, species_description, patient_status, client_firstname, client_lastname ) VALUES (:patient_name, :species_description, :patient_status, :client_firstname, :client_lastname )";
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $values['patient_name']);
	$query->bindParam(":species_description", $values['species_description']);
	$query->bindParam(":patient_status", $values['patient_status']);
	$query->bindParam(":client_firstname", $values['client_firstname']);
	$query->bindparam(":client_lastname", $values['client_lastname']);
	$query->execute();
	return true;
}



?>
