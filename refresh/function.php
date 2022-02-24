<?php 

//global variable 

// $name = "michael";
// $state = "lagos";

$x = 20;
$y = 40;




function writeMsg($x, $y) {
    global $name;
    define("name", "this is a constant", false);
    // $name = "we want to call this function somewhere elese";
    echo "<br>";
    echo $x + $y;
    //local variable 

    return $name;
  }
  

  
 




 




?>