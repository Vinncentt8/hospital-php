<?php

function getPatients() 
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM patients";

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

	$sql = "INSERT INTO patients (patient_name, patient_status) VALUES (:patient_name, :patient_status);";
	// var_dump($answers);
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $saves['patient_name']);
	$query->bindParam(":patient_status", $saves['patient_status']);
	$query->execute();
	return true;
}

function updatePatients($id)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET patient_name, patient_status VALUES (:patient_name, :patient_status)";
	$query = $db->prepare($sql);
	$query->bindParam(":name", $saves['patient_name']);
	$query->bindParam(":name2", $saves['patient_status']);
	header('location: ' . URL . 'patients/index');
	$query->execute();
	
}

?>
