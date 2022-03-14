<?php 
session_start();
if(isset($_SESSION['username'])){
    
    session_destroy();

    Header("Location:form/login.php");
}else{

    Header("Location:index.php");
}


?>