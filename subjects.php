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

<p>Subject Name: <input type="text" value="<?= $subj['menu_name'] ?>" name="name" class="form-control" placeholder="subject name" readonly> 
</p>
<p>Position: <select name="position" readonly> 
    <option>  <?=  $subj['position'] ?> </option>
</select> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1" <?php if($subj['visible'] == 1) {?> checked <?php }?> readonly>
    No<input type="radio" name="visible" class="form-control" value="0" <?php if($subj['visible'] == 0) {?> checked <?php }?> readonly></p>


<p> <a href="update_subject.php?subj_id=<?=$subject_id ?> ">  Edit Subject </a>  <br> </p> 

<!--  -->

<!-- update form -->

<!-- delete form -->
<form action="delete_subject.php" method="post">
<input type="hidden" name="subj_id" value="<?= $subj['id']?>">
        <input type="submit" value="Delete subject" onclick="return confirm('Are you sure')"> 
</form>
<p> <a href="add_page.php?subj_id=<?= $subj['id']?> "> Add Pages to subject </a></p>




</td>




</tr>


</table>





<?php include("includes/footer.php");?>