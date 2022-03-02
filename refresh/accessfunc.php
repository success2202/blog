<?php 

class accessfunc{


    private $name,$age,$state;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        
    }

    protected function get_name(){
        return $this->name  = "my name is muchael";
    }

    public function get_age($age){
      return  $this->age = $age;
    }

    protected function get_state(){
        return $this->state = 'iam from lagos state';
    }

    function show_state(){
        return $this->get_state();
    }
}


class accessmeth extends accessfunc{
    public function dis_name(){
        return $this->name = $this->get_name();


    }

}



$cc = new accessmeth("micahel", 22);

echo($cc->dis_name());


// $user = new accessfunc;
// //echo($user->get_name('michael'));
// echo ($user->get_age('22'));
// echo($user->show_state());

?>