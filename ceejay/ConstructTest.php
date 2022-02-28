  <?php

class student{

public $name;
public $age;
public $school;
public $address;

function __construct($name, $age, $school, $address){
	$this->name = $name;
	$this->age = $age;
	$this->school = $school;
	$this->address = $address;
}

function MyName(){
	return $this->name;
}

function MyAge(){
	return $this->age;
}

function MySchool(){
	return $this->school;
}

function MyAddress(){
	return $this->address;
}

}
$mm = new student('michael', '28', 'yabatech', 'No 2 raseem adebayo street');
echo"YOUR NAME IS:"; echo"<br>";
echo($mm->MyName());
echo"<br>";
echo"YOUR AGE IS:"; echo"<br>";
echo($mm ->MyAge());
echo"<br>";
echo"YOUR SCHOOL IS:"; echo"<br>";
echo($mm->MySchool());
echo"<br>";
echo"YOUR ADDRESS IS:"; echo"<br>";
echo($mm ->MyAddress());

?>