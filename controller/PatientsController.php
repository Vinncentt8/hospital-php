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
	if (!createPatients()) {
		header("Location:" . URL . "error/index");
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

