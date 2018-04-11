<?php

require(ROOT . "model/patientsModel.php");
require(ROOT . "model/speciesModel.php");
require(ROOT . "model/clientsModel.php");

function index()
{
    render("patients/overview", array(
        'patients' => getAllPatients()
    ));
}
// ---------------------------------------------------------------------------------------------
function create()
{	
	
	render("patients/create", array( 
	'species' => getAllSpecies(),
	'clients' => getAllClients()
	));
}

function createSave()
{
	
	
	if (!saveCreatedPatient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patients/index");
}



// ---------------------------------------------------------------------------------------------

function update($id)
{
	$patient = getPatient($id);
	render("patients/update", array(
		'patient' => $patient,
		'species' => getAllSpecies(),
		'clients' => getAllClients()
	));
}


function updateSave()
{
	if (!updatePatients($_POST)) {
		header("Location:" . URL . "error/Error_update");
		exit();
	}
	header("Location:" . URL . "patients/index");
} 

// ---------------------------------------------------------------------------------------------


function delete($id)
{
	if (!deletePatients($id)) {
		header("Location:" . URL . "error/error_404");
		exit();
	}
	header("Location:" . URL . "patients/index");
}

