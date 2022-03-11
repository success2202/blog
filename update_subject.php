<?php include("includes/header.php");?>
<?php include("includes/func.php");?>

<?php 

$subject_id = $_GET['subj_id'];
$subjects = "SELECT * FROM subjects WHERE id=$subject_id LIMIT 1";
$subj_chk = mysqli_query($con, $subjects);
$subj = mysqli_fetch_assoc($subj_chk);
?>

<table id="structure">

<tr>

<td id="navigation">

<?= navigation(); ?>

    <a href="add_subjects.php"> Add New Subject
</td>

<td id="page">


<h2>  <?=  $subj['menu_name'] ?> Details</h2>

<form action="subjectProcessor.php" method="post">
<p>Subject Name: <input type="text" value="<?= $subj['menu_name'] ?>" name="name" class="form-control" placeholder="subject name"> 
</p>
<p>Position: <select name="position"> 
<?php    $sql = "SELECT * FROM subjects";
        $chk =mysqli_query($con, $sql);
        $tik = mysqli_num_rows($chk);
    
        for($x = 1; $x <= $tik + 1; $x++)
            echo "<option value=\" $x\">".$x."</option>";
        ?>
</select> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1" <?php if($subj['visible'] == 1) {?> checked <?php }?> >
    No<input type="radio" name="visible" class="form-control" value="0" <?php if($subj['visible'] == 0) {?> checked <?php }?>></p>
    <input type="hidden" name="subj_id" value="<?= $subj['id']?>">
<input type="hidden" name="update" value="update">
<p> <input type="submit" value="Update Subject"></p> 
</form>
<!-- delete form -->
</td>




</tr>


</table>





<?php include("includes/footer.php");?>