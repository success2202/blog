<?php include("includes/header.php");?>
<?php include("includes/func.php");?>


<table id="structure">

<tr>

<td id="navigation">

<?= navigation(); ?>

    <a href="add_subjects.php"> Add New Subject
</td>

<td id="page">


<h2> Add new SUbject</h2>

<form action="subjectProcessor.php" method="post">
<p>Subject Name: <input type="text" name="name" class="form-control" placeholder="subject name"> 
</p>
<p>Position: <select name="position"> 
    
    <?php    
            $tik = get_all_subject();
        for($x = 1; $x <= $tik + 1; $x++)
        echo "<option value=\" $x\">".$x."</option>";
        
        ?>
</select> </p>
<p> Visibility:
    
    Yes<input type="radio" name="visible" class="form-control" value="1">
    No<input type="radio" name="visible" class="form-control" value="0"></p>


 <input name="subj_id" type="hidden">
 <input name="add"  type="hidden">
<p> <input type="submit" value="Save Subject"> </p>
</form>





</td>




</tr>


</table>









<?php include("includes/footer.php");?>