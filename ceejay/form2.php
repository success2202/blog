<?php 


class form2{

public $username; 
public $password;


//meothod 

function UserName($username){

    $_POST['username'] = $this->username = $username;
    return $_POST['username'];

}

function PassWord($password){
   $_POST['password'] = $this->password = $password;
    return $_POST['password'];
}
}

$user = new form2();

 $_POST['username']= $user->UserName($_POST['username']);
 $_POST['password'] = $user->PassWord($_POST['password']);

echo "this is your username and password";
echo "<br>";
echo $_POST['username'];
echo "<br>";

 echo  $_POST['password'];


?>
