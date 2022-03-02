<?php

$con = mysqli_connect("localhost", "root", "", "cms");

if(!$con){
        echo "connection failed".mysqli_errno();
}


?>