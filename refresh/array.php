<?php

//create a page to accept inputs

//store the inputs as array

//call the array variable inside a function

//output the result


//hints

$array_new = array();

$name = $_POST["name"];
$dpt = $_POST["dpt"];
$state = $_POST["state"];
$city = $_POST['city'];



function checkInput($name, $dpt, $state, $city){

    if(empty($name) && empty($dpt) && empty($state) && empty($city)){

        return "some fields are required";
        die();
    }
    $array_new = [
        'name' => $name,
        'dpt' => $dpt,
        'state' => $state,
        'city' => $city
    ];
    

    return $array_new;
}

print_r(checkInput($name, $dpt, $state, $city));



?>