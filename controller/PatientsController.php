<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
    render("patients/overview", array(
        'patients' => getPatients()
    ));
}