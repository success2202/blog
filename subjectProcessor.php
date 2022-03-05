<?php
include('includes/core/db_connect.php');
$name= $_POST['name'];
$position= $_POST['position'];
$visible = $_POST['visible'];
$sql = "INSERT INTO subjects VALUES(NULL, '$name', $position, $visible)";
//$sql = "INSERT INTO subjects(`id`, `menu_name`, `position`, `visible`) VALUES(NULL, '$name', $position, $visible)";
$chk = mysqli_query($con, $sql);
if(!$chk){
    echo mysqli_connect_error();
}else{?>
    <script>
    window.location = "index.php";
</script>
    <?php } ?>
