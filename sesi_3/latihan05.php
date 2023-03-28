<?php
//php associative array
//model 1
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    header('Content-Type: application/json; charset=utf-8'); 
    echo json_encode($age);