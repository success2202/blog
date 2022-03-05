<?php include("include/header.php");?>


<table id="structure">

<tr>

<td id="navigation">

    <ul class="subjects"> 
        
    <li> Subject 1
        <ul class="pages"> 
        <li> Page 1 </li>
        <li> Page 2</li>
        </ul>
    </li> <br>
   <li> subject 2 
   <ul class="pages">
       <li> Page 3 </li>
       <li> Page 4 </li>
   </ul>
   </li> <br>
    <li> Subject 3 
    <ul class="pages">
    <li> Page 5</li>
    <li> Page 6</li>
    </li>
    </ul>
     <br>
    </ul>
<a href="add_newSubject.php"> Add New Subject </a>
</td>

<td id="page">


<h2> Add new SUbject</h2>

<form method="post" action="save_subject.php">
<p>Subject Name: <input type="text" name="subject" class="form-control" placeholder="subject name"> 
</p>
<p>others: <input type="text" name="other" class="form-control" placeholder="subject name"> 
</p>
<p>Position: <select name="pos"> 
    <option value="one"> 1 </option>
     <option value="two"> 2 </option>
      <option value="three"> 3 </option>
       <option value="four"> 4 </option>
        <option value="five"> 5 </option>
         <option value="six"> 6 </option>
</select> </p>
<p> Visibility:
    <input type="radio" name="visible" class="form-control" value="1"> Yes
   <input type="radio" name="visible" class="form-control" value="2">  No</p>


<p> <input type="submit"  value="Save Subject"> </p>



</form>
</td>




</tr>


</table>









<?php include("include/footer.php");?>