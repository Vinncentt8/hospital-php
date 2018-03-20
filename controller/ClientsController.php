<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
    render("clients/overview", array(
        'clients' => getClients()
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
	render("clients/update", array(
		'clients' => getClients($id)
	));
}

// function update($id)
// {
// 	//$data = getClients($id);

// 	//var_dump($data);
// 	render("clients/update", $data);


// 	render("clients/update", array(
// 		'clients' => getClient($id)
// 	));
// }


function updateSave()
{
	if (!updateClients()) {
		header("Location:" . URL . "error/je bent er!");
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



