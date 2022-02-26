<?php

class test{

    public $name;
    public $color;

function __construct($name, $color)
{
    $this->name = $name;
    $this->color = $color;
}


function set_name(){

    return $this->name;
}

function get_color(){
    $value = "the name of this color is";
    return $this->color.$value;
}

function another_function(){

    $mm = "this color is bad";
    return $this->color.$mm;
}
}

$cc = new test('mikky', 'blue');

echo($cc->set_name());
echo($cc->get_color());
echo($cc->another_function());



?>