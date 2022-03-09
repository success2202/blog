<?php include("includes/header.php");?>
<?php include("includes/func.php");?>

<?php 

$page_id = $_GET['page_id'];

$pages = "SELECT * FROM pages WHERE id=$page_id LIMIT 1";
$page_chk = mysqli_query($con, $pages);
$page = mysqli_fetch_assoc($page_chk);
?>

<table id="structure">

<tr>

<td id="navigation">

<?= navigation(); ?>

    <a href="add_subjects.php"> Add New Subject
</td>

<td id="page">


<h2>  <?=  $page['menu_name'] ?>  Details</h2>

<form action="pagesProcessor.php" method="post">
<p>Page Name: <input type="text" value=" <?=  $page['menu_name'] ?>   " name="menu_name" class="form-control" placeholder="Page name"> 
</p>
<p>Position: <select name="position"> 
    <option  <?=  $page['position'] ?>  >  <?=  $page['position'] ?>   </option>
    <?php    $sql = "SELECT * FROM pages";
        $chk =mysqli_query($con, $sql);
        $tik = mysqli_num_rows($chk);
    
        for($x = 1; $x <= $tik + 1; $x++)
        echo "<option value=\" $x\">".$x."</option>";
        
        ?>
</select> </p> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1" <?php if($page['visible'] == 1) echo " checked" ?>>
    No<input type="radio" name="visible" class="form-control" value="0" <?php if($page['visible'] == 0) echo " checked" ?>></p>
<p>

<input type="hidden" name="page_id" value="<?= $page['id']?>">
<input type="hidden" name="subject_id" value="">
<input type="hidden" name="update" value="update">
<textarea rows="20" cols="50" name="content" placeholder="enter contents here">  <?=  $page['content'] ?> </textarea>
     </p>

<p> <input type="submit" value="update Page">  

    

</p> 
</form>

<form action="delete_page.php" method="post">
        <input type="hidden" name="pages_id" value="<?= $page['id']?>">
        <input type="submit" value="Delete Page" onclick="return confirm('Are you sure')"> 

    </form>





</td>




</tr>


</table>





<?php include("includes/footer.php");?>