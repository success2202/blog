<?php
session_start();
include('includes/conn/db_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$LogReg = $_POST['LogReg'];
$email = $_POST['email'];
$state = $_POST['state'];
$country = $_POST['country'];
//var_dump($username, $password, $email, $state, $country);
      //  die();

function Regfunc($username, $password, $email, $state, $country){
global $con;

$password = base64_encode($password);
$sql = "INSERT INTO logtb VALUES(NULL, '$username', '$password', '$email', '$state', '$country')";

$check = mysqli_query($con, $sql);

if($check){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    
    Header("location:index.php");
}
}

function logfunc($username, $password){
    global $con;
    $sql = "SELECT * FROM logtb WHERE username ='$username' LIMIT 1";
    $checks = mysqli_query($con, $sql);

    if($checks){
        $user = mysqli_fetch_assoc($checks);
        $pass = base64_decode($user['password']);
        //var_dump($user);
       // die();
        if($pass == $password){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
           // var_dump($username, $password);
           // die();
            Header("location:index.php");
        }else{

            $_SESSION['error'] = "Username/Password is Incorrect";
            Header("location:login.php");

        }
    }else{
        $_SESSION['error'] = "Username/Password is Incorrect";
        Header("location:login.php");
    }
    }

    if($LogReg == "register"){
        Regfunc($username, $password, $email, $state,$country);

    }
    
    if($LogReg == "login"){
        logfunc($username, $password);
        
    }

    





?>
