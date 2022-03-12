<?php
include('includes/core/db_connect.php');
$name= $_POST['name'];
$subject_id = $_POST['subj_id'];
$position= $_POST['position'];
$visible = $_POST['visible'];

function Insert($name,$position, $visible, $con){
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
}
    
 //update subject function
 function Update($name,$position, $visible, $subject_id){
        global $con;
        // var_dump($page_id);
        // die();
        $sql = "UPDATE subjects SET  `menu_name`='$name',`position`=$position, `visible`=$visible WHERE `id`=$subject_id";
        $chks = mysqli_query($con, $sql);
      //  var_dump($chks);
       //  die();
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
            // var_dump($name."position:".$position."visible = ".$visible.$_POST['subj_id'].$_POST['add']);
            // die();
            Insert($name,$position, $visible, $con);   
        }
        
        if(isset($_POST['update'])){
         
            Update($name,$position, $visible, $subject_id);
        }
        
    ?>
