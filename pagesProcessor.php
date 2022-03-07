<?php 
include('includes/core/db_connect.php');

$name = $_POST['menu_name'];
$position = $_POST['position'];
$visible = $_POST['visible'];
$content = $_POST['content'];
$subj_id = $_POST['subject_id'];

$sql = "INSERT INTO pages VALUES(NULL, $subj_id, '$name', '$content',$position, $visible)";
$chks = mysqli_query($con, $sql);

if($chks){?>

<script>
    window.location = "index.php";
    </script>
<?php


}else{?>

    <script>
        window.location = "add_page.php?subj_id=1";
        </script>
    <?php
}


?>