<?php
include('includes/core/db_connect.php');
$page_id = $_POST['pages_id'];
//var_dump($page_id);
//die();
function delete_page($page_id){
    global $con;

    $sql = "DELETE FROM pages where `id`=$page_id";
    $chk = mysqli_query($con, $sql);
    if($chk){
        header("Location:index.php");
    }
}
delete_page($page_id);


?>