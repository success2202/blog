<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student form</title>

<style> 

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 30px auto;
    text-align: center;
    width: 600px;
}
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
    
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.2rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 600px;
    background: #eee;
}
div.form-element {
    margin: 20px 0;
}
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: 4px solid #ccc;
}
p.success{
    color: white;
    font-family: 'lato';
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
p.error {
    background: orangered;
}

</style>


</head>
<body>
<h1> login page</h1>
<form method="post" action="details.php">

  <div class="form-element">
    <label>SURNAME</label>
    <input type="text" name="sname" required />
  </div>

  <div class="form-element">
    <label>OTHER NAMES</label>
    <input type="text" name="onames" required />
  </div>

  <div class="form-element">
    <label>DEPARTMENT</label>
    <input type="text" name="dpt" required />
  </div>

  <div class="form-element">
    <label>COURSE</label>
    <input type="text" name="course" required />
  </div>

  <div class="form-element">
    <label>EMAIL</label>
    <input type="email" name="email" required />
  </div>


<div class="form-element">
    <label>PHONE NUMBER</label>
    <input type="text" name="pnumber" required />
  </div>


<div class = "form-element">
<label>COUNTRY</label>
<select name ="country">
    <option value="Nig"> Nigeria </option>
    <option value="Us"> United State</option>
    <option value="Germ"> German </option>
     <option value="Uk"> UK </option>
      <option value="Ind"> India </option>
       <option value="Jap"> Japan </option>
        <option value="Chi"> China </option>
         <option value="Can"> Canada </option>
</select> 
    
</div>


  <button type="submit" name="login" value="login">Log In</button>
</form>
</body>
</html>

