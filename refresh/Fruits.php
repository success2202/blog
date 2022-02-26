<?php 

class Fruits{

public $name;
public $color;


//meothod 

function set_name($name){

    return $this->name = $name;
}

function set_color($color){
    return $this->color = $color;
}
}

$apple = new Fruits();

$apple->set_color('green');
$apple->set_name('mango');
echo "<br>";
$apple->set_color('green');
 


?>
