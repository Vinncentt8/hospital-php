<?php

require(ROOT . "model/HospitalModel.php");

function index()
{
    render("home/index", array(
        'clients' => getInformation()
    ));
}