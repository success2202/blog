<?php 
if(!isset($_SESSION['username'])){
    header("location:form/login.php");
}
?>