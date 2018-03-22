<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
    render("patients/overview", array(
        'patients' => getPatients()
    ));
}
// ---------------------------------------------------------------------------------------------
function create()
{
	render("patients/create");
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

	if( isset($_POST['patients_name'])){
	 updatePatients($id);
	 header("Location:" . URL . "patients/index");
	 exit();
	}
	
	render("patients/update", array(
		'patients' => getPatients($id)
	));
}



function updateSave()
{
	if (!updateClients()) {
		header("Location:" . URL . "error/je bent er!");
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

