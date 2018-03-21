<?php

function getPatients() 
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM patients LEFT JOIN species ON patients.species_id = species.species_id LEFT JOIN clients ON patients.client_id = clients.client_id";

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
	$sql = "INSERT INTO patients (patient_id, patient_name, patient_status) VALUES (:id, :name, :status);";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->bindParam(":name", $values['patient_name']);
	$query->bindParam(":status", $values['patient_status']);
	$query->execute();
	return true;
}

function updatePatients($id)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->bindParam(":patient_name", $save['patient_name']);
	$query->bindParam(":patient_status", $save['patient_status']);
	$query->bindParam(":patient_id", $id);
	$query->execute();
	
}

?>
