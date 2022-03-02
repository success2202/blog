<?php
abstract class fruits{
public $name, $color;

function  __construct($name){
    $this->name=$name;
    
}

abstract public function intro() : string;

}
class apple extends fruits {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name";
    }

}

class orange extends fruits {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
}
    $app = new apple("apple");
    $oran = new orange("orange");
    echo $app->intro();
    echo "<br>";
    echo $oran->intro();
?>