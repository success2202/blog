<html>
<head>

</head
<body>

<form method="post" action=""> <br> 
number one : <input type="text" name="no1"> <br> 
<select name="operator">
	<option value="add"> + </option>
	<option value="sub"> - </option>
	<option value="mult"> * </option>
</select> <br> 
number two: <input type="text" name="no2"> <br> 
<input type="submit">
</form>
<?php
$no1 = $_POST["no1"];
$operator = $_POST["operator"];
$no2 = $_POST["no2"];
$result = null;

$operator = $operator;
switch ($operator) {
	case 'add':
		$result = $no1 + $no2;
		echo "$result";
		break;
	
	case 'sub':
		$result = $no1 - $no2;
		echo "$result";
		break;

		case 'mult':
		$result = $no1 * $no2;
		echo "$result";
		break;
	default:
		// code...
		break;
}

?>
</body>
</html>