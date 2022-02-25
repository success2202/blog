<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

<style>
    
    h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
    text-align: center;
    
}

div.form-element{
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 600px;
    background: #eee;
}
</style>


</head>
<body>

<h1> STUDENT INFORMATION</h1>

<div class="form-element">

<?php
 echo "SURNAME :";  echo "<br>"; echo $_POST["sname"]; 
 echo "<br>";
echo "<br>";
 echo "OTHER NAMES :";  echo "<br>"; echo $_POST["onames"];
  echo "<br>";
  echo "<br>";
 echo "DEPARTMENT :";  echo "<br>"; echo $_POST["dpt"]; 
 echo "<br>";
  echo "<br>";

 echo "COURSE:";  echo "<br>"; echo $_POST["course"];
  echo "<br>";
  echo "<br>";
  echo "EMAIL :";  echo "<br>";echo $_POST["email"]; 
   echo "<br>";
echo "<br>";
 echo "PHONE NUMBER :";  echo "<br>"; echo $_POST["pnumber"];
  echo "<br>";
  echo "<br>";
$country =  $_POST["country"];
$country = $country;

 switch ($country) {
     case 'Nig':
     echo "COUNTRY :";  echo "<br>";
         echo "Ngeria";
         break;
     
     case 'Us':
     echo "COUNTRY :";  echo "<br>";
         echo "United State";
         break;

         case 'Uk':
         echo "COUNTRY :";  echo "<br>";
         echo "United Kingdom";
         break;

         case 'Ind':
         echo "COUNTRY :";  echo "<br>";
         echo "India";
         break;

         case 'Can':
         echo "COUNTRY :";  echo "<br>";
         echo "Canada";
         break;

         case 'Jap':
         echo "COUNTRY :";  echo "<br>";
         echo "Japan";
         break;

         case 'Chi':
         echo "COUNTRY :";  echo "<br>";
         echo "China";
         break;

         case 'Germ':
         echo "COUNTRY :";  echo "<br>";
         echo "German";
         break;
     default:
         // code...
         break;
 }

?>


</div>





















</body>
</html>




