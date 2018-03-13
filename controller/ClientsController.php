<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
    render("clients/overview", array(
        'clients' => getClients()
    ));
}



function delete($id)
{
	if (!deleteClients($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "clients/index");
}

function create()
{
	render("clients/create");
}

function createSave()
{
	if (!createClients()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "clients/index");
}