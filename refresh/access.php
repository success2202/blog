<?php 

//access modifiers 
class acessMod{


private $name;
public $age;
protected $state;


 function states($state){
     return $this->state = $state;
 }
}


$user = new acessMod();
//$cc = $user->name = "micael";
$cs = $user->states('lagos');
$kk = $user->age = 12;

//echo $cc;
echo "<br>";
echo $cs;
echo "<br>";
echo $kk;




?>