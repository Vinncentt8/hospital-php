<?php
function getInformation() 
{
	$db = openDatabaseConnection();

	$sql ="SELECT * FROM patients LEFT JOIN species ON patients.species_id = species.species_id LEFT JOIN clients ON patients.client_id = clients.client_id ";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function deleteHospital($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
}

?>