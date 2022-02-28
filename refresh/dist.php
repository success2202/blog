<?php


class dist{


    public $name, $age; 

    function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age;

      $this->xy = 20 + 49;
    }

    function __destruct()
    {
        echo "Your name is $this->name and your age is $this->age. the calculation is $this->xy";
    }
}
    $user = new dist("kachi", "22");

   // print_r($user);




?>