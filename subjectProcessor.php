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
    <?php } 
    
    
    
    //update subject function


    function Update($name,$position, $visible, $subject_id){
        global $con;
        // var_dump($page_id);
        // die();
        $sql = "UPDATE subjects SET  `menu_name`='$name',`position`=$position WHERE `id`=$subject_id";
        $chks = mysqli_query($con, $sql);
        if($chks){?>
        <script>
            window.location = "index.php";
            </script>
        <?php
        }else{
            ?>
        
            <script>
                window.location = "add_page.php?subj_id=1";
                </script>
            <?php
        }
        }
    
        if(isset($_POST['add'])){
            Insert($subject_id, $name,$position, $visible, $con);   
        }
        
        if(isset($_POST['update'])){
            //   var_dump($name.$position.$visible.$content.$page_id);
            //  die();
            Update($name,$position, $visible, $subject_id);
        }
        
    ?>
