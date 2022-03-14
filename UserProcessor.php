<?php 
session_start();
include('includes/core/db_connect.php');

$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$form_type = $_POST['form_type'];

// var_dump($form_type);
// die();

    function redirect($url){
        Header("Location=$url");
    }

    function getUserExist($username, $email){
        global $con;
        $user = "SELECT * FROM users WHERE `email`='$email' || username='$username' LIMIT 1  ";
        $uchk = mysqli_query($con, $user);
        $chks = mysqli_num_rows($uchk);
        if($uchk){
            $_SESSION['email'] = "User already exist";
        }
        return $chks;
    }

function Register($username, $pass, $email){
    $sd =  getUserExist($username, $email);
    if($sd){
        return Header("location:form/register.php");
    }
    global $con;
    $pass = base64_encode($pass);
    $sql = "INSERT INTO users VALUES(NULL, '$username', '$pass',NULL, '$email', NULL, NULL)";
    $chk = mysqli_query($con, $sql);
    if($chk){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $pass;
        // var_dump($_SESSION['username']);
        // die();
        Header("location:index.php");
    }

}


    function LoginUser($username, $pass){
        global $con;
        
        $sql = "SELECT * FROM users WHERE username ='$username' LIMIT 1";
        $chk = mysqli_query($con, $sql);
        if($chk){
        $user = mysqli_fetch_assoc($chk);
        $password = base64_decode($user['pass']);
        // var_dump($password);
        // die();
        if($password == $pass){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $pass;
            // var_dump($_SESSION['username']);
            // die();
            Header("location:index.php");
        }else{

            $_SESSION['error'] = "Username/Password is Incorrect";
            Header("location:form/login.php");

        }
    }else{
        $_SESSION['error'] = "Username/Password is Incorrect";
        Header("location:form/login.php");
    }
    }


    if($form_type == "register"){
        Register($username, $pass, $email);

    }
    
    if($form_type == "login"){
        LoginUser($username, $pass);

    }

?>