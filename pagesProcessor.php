<?php 
include('includes/core/db_connect.php');

$name = $_POST['menu_name'];
$position = $_POST['position'];
$visible = $_POST['visible'];
$content = $_POST['content'];
$page_id = $_POST['page_id'];


function Insert($subj_id, $name,$position, $visible, $content, $con){
$sql = "INSERT INTO pages VALUES(NULL, $subj_id, '$name',$position, $visible, '$content')";
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
}



function Update($name,$position, $visible, $content, $page_id){
    global $con;
    // var_dump($page_id);
    // die();
    $sql = "UPDATE pages SET  `menu_name`='$name',`position`=$position,`visible`=$visible,`content`='$content' WHERE `id`=$page_id";
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
    Insert($subj_id, $name,$position, $visible, $content, $con);   
}

if(isset($_POST['update'])){
    //   var_dump($name.$position.$visible.$content.$page_id);
    //  die();
    Update($name,$position, $visible, $content, $page_id);
}




?>