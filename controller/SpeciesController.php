<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
    render("species/overview", array(
        'species' => getSpecies()
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


function delete($id)
{
	if (!deleteSpecies($id)) {
		header("Location:" . URL . "error/error_404");
		exit();
	}
	header("Location:" . URL . "species/index");
}

