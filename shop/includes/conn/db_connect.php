<?php
$con = mysqli_connect("localhost", "root", "", "blog");
if(!$con){
    echo "the database is not connceted". mysqli_connect_error();
}



?>