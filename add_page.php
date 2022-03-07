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


<h2>  Add Pages to <?=  $subj['menu_name'] ?> </h2>

<form action="subjectProcessor.php" method="post">
<p>Page Name: <input type="text" value="<?= $subj['menu_name'] ?>" name="name" class="form-control" placeholder="subject name"> 
</p>
<p>Position: <select name="position"> 
    <option>  <?=  $subj['position'] ?> </option>
</select> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1" <?php if($subj['visible'] == 1) {?> checked <?php }?> >
    No<input type="radio" name="visible" class="form-control" value="0" <?php if($subj['visible'] == 0) {?> checked <?php }?>></p>
<p>

<textarea rows="20" cols="50" name="content" placeholder="enter contents here"> </textarea>
     </p>

<p> <input type="submit" value="Add Page"> </p> 
</form>





</td>




</tr>


</table>





<?php include("includes/footer.php");?>