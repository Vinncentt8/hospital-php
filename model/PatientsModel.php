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

function saveCreatedPatient($values){
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patients (patient_name, patient_status) VALUES (:patient_name, :patient_status)";
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $values['patient_name']);
	$query->bindParam(":patient_status", $values['patient_status']);
	header('location: ' . URL . 'patients/index');
	$query->execute();
	return true;
}

function updatePatients($save)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status  WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $save['patient_name']);
	$query->bindParam(":patient_status", $save['patient_status']);
	$query->bindParam(":patient_id", $id);
	$query->execute();
	
}

?>
