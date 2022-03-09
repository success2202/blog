<?php 
include('includes/core/db_connect.php');

$name = $_POST['menu_name'];
$position = $_POST['position'];
$visible = $_POST['visible'];
$content = $_POST['content'];
$subj_id = $_POST['subject_id'];

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

function Update($page_id, $name,$position, $visible, $content, $con){
    $sql = "UPDATE pages SET `id`=NULL,  NULL, '$name',$position, $visible, '$content')";
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
if(isset($_POST['add'])){
    Insert($subj_id, $name,$position, $visible, $content, $con);   
}

if(isset($_POST['update'])){

    Update($subj_id, $name,$position, $visible, $content, $con);
}



?>