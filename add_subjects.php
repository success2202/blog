<?php include("includes/header.php");?>


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
    <li> SUbject 3 
    <ul class="pages">
    <li> Page 5</li>
    <li> Page 6</li>
    </li>
    </ul>
     <br>
    </ul>

    <a href="add_subjects.php"> Add New Subject
</td>

<td id="page">


<h2> Add new SUbject</h2>


<p>Subject Name: <input type="text" name="subject" class="form-control" placeholder="subject name"> 
</p>
<p>Position: <select> 
    <option value="1"> 1 </option>
</select> </p>
<p> Visibility:
    Yes<input type="radio" name="visible" class="form-control" value="1">
    No<input type="radio" name="visible" class="form-control" value="2"></p>


<p> <input type="submit" value="Save Subject"> </p>






</td>




</tr>


</table>









<?php include("includes/footer.php");?>