<?php 
session_start();
if(isset($_SESSION['username'])){
    
    session_destroy();

    Header("Location:login.php");
}else{

    Header("Location:index.php");
}


?>