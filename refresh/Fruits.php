<?php 

class Fruits{

public $name;
public $color;


//meothod 

function set_name($name){

    $cc = $this->name = $name;
    return $cc;

}

function set_color($color){
    return $color;
}
}

$apple = new Fruits();

$mm = $apple->set_color('green');
$kk = $apple->set_name('mango');
echo "<br>";
$apple->set_color('green');
echo $mm;


?>
