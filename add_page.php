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

<form action="pagesProcessor.php" method="post">
<p>Page Name: <input type="text" value="" name="menu_name" class="form-control" placeholder="Page name"> 
</p>
<p>Position: <select name="position"> 
    
    <?php    $sql = "SELECT * FROM pages";
        $chk =mysqli_query($con, $sql);
        $tik = mysqli_num_rows($chk);
    
        for($x = 1; $x <= $tik + 1; $x++)
        echo "<option value=\" $x\">".$x."</option>";
        
        ?>
</select> </p> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1">
    No<input type="radio" name="visible" class="form-control" value="0"></p>
    
<p>
<input type="hidden" name="subject_id" value="<?= $subj['id']?>">
<input type="hidden" name="add" value="add">
<textarea rows="20" cols="50" name="content" placeholder="enter contents here"> </textarea>
     </p>

<p> <input type="submit" value="Add Page"> </p> 
</form>





</td>




</tr>


</table>





<?php include("includes/footer.php");?>