<?php

require(ROOT . "model/ClientsModel.php");

function getClients()
{
    render("clients/index", array(
        'clients' => getClients()
    ));
}