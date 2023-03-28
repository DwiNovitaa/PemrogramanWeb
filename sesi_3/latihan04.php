<?php
//php indexed array
//model 1
    //$cars = array("Volvo", "BMW", "Toyota");
//model 2
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    header('Content-Type: application/json; charset=utf-8'); 
    echo json_encode($cars); //mode pertukaran data menggunakan json

