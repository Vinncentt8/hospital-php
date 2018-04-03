<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
    render("species/overview", array(
        'species' => getAllSpecies()
    ));
}

// ---------------------------------------------------------------------------------------------
function create()
{
	render("species/create");
}


function createSave()
{
	if (!saveCreatedSpecie($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "species/index");
}

// ---------------------------------------------------------------------------------------------
	// Controleer of er een POST request binnen komt
		// Is dat het geval, dan moet de functie updatePatients($id) worden aangeroepen 
		// Daarna mag de pagina worden doorgestuurd naar de patient/index pagina (header location)
function update()
{
	render("species/update", array(
		'species' =>  getAllSpecies()
));
}


function updateSave()
{
	if (!updateSpecies($_POST)) {
		header("Location:" . URL . "error/je bent er!");
		exit();
	}
	header("Location:" . URL . "species/index");
} 




// ---------------------------------------------------------------------------------------------


function delete($id)
{
	if (!deleteSpecies($id)) {
		header("Location:" . URL . "error/error_404");
		exit();
	}
	header("Location:" . URL . "species/index");
}

