<html>
<head>
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 20px auto;
    height: 100%;
    text-align: center;
    width: 100%;
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
form {
    margin: 0;
    padding: 20px;
    border: 2px solid #ccc;
    width: 100%x;
    background: #eee;
    height: 100%;
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
</body>
<h1> login page</h1>

<form method="post" action ="index.php">

  <div class="form-element">
      
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>




</body>
</html>