<?php
include('includes/core/db_connect.php');
$subj_id = $_POST['subj_id'];
//var_dump($page_id);
//die();
function delete_subj($subj_id){
    global $con;

    $sql = "DELETE FROM subjects where `id`=$subj_id";
    $chk = mysqli_query($con, $sql);
    if($chk){
        header("Location:index.php");
    }
}
delete_subj($subj_id);


?>