<?php

require(ROOT . "model/HospitalModel.php");

function index()
{
    render("home/index", array(
        'clients' => getInformation()
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