<html>
<head>

</head
<body>

<form method="post" action=""> <br> 
please enter your username:<br> <br>  
<input type="text" name="name"> <br> 
please enter your password:<br> <br> 
 <input type="password" name="password"> <br> <br> 
<input type="submit">
</form> 
<?php
$array_new = array();

$name = $_POST["name"];
$paswd = $_POST["password"];
 $names = "success";
$paswds = "ceejay220";



function checklogin($name, $paswd){
    global $names, $paswds;
    
    if(empty($name) && empty($paswd)){

        return "enter your username and password";
        die();
    }elseif($name != $names && $paswd != $paswds){
        
        return "Usernamme/Password is not correct";

    }

    
    $array_new = [
        'name' => $name,
        'password' => $paswd,
        
    ];
    

    return $array_new;
}

print_r(checklogin($name, $paswd));



?>




</body>
</html>