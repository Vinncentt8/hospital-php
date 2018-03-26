<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
    render("clients/overview", array(
        'clients' => getAllClients()
    ));
}

// ---------------------------------------------------------------------------------------------

function create()
{
	render("clients/create");
}


function createSave()
{
	if (!saveCreatedClient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "clients/index");
}


// ---------------------------------------------------------------------------------------------

function update($id)
{
	$client = getClient($id);
	render("clients/update", array(
		'client' => $client
	));
}


function updateSave()
{

	if (!updateClient($_POST)) {
		header("Location:" . URL . "error/Error_update");
		exit();
	}
	header("Location:" . URL . "clients/index");
} 

// ---------------------------------------------------------------------------------------------



function delete($id)
{
	if (!deleteClients($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "clients/index");
}




