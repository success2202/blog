<html>
<head>
	<style>
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
	</style>

</head>
<body>

<form method="post" action="funcresult.php"> <br> 
<label>number one : </label> <input type="text" name="no1"> <br> 
<select name="operator">
	<option value="add"> + </option>
	<option value="sub"> - </option>
	<option value="mult"> * </option>
	<option value="div"> / </option>
</select> <br> 
<label> number two: </label> <input type="text" name="no2"> <br> 
<input type="submit">
</form>
</body>
</html>