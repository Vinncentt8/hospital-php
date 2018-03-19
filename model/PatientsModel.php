<?php

function getPatients() 
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM patients LEFT JOIN species ON patients.species_id = species.species_id LEFT JOIN clients ON patients.client_id = clients.client_id ";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
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

function saveCreatedPatient($saves){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient (patient_name, patient_status) VALUES (:patient_name, :patient_status);";
	// var_dump($answers);
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $saves['patient_name']);
	$query->bindParam(":patient_status", $saves['patient_status']);
	$query->execute();
	return true;
}
?>
