<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user login </title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
		<div class="login-box">
            <div class="login-left">
				<h2>Login Here</h2>
                
                <form action="UserProcessor.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<input type="hidden" name="LogReg" value="login">
                   

<button type="submit" class="btn btn-primary">Login</button>
 <a  class="sign-up" href="register.php"> Sign Up</a>

 <?php if(isset($_SESSION['error'])) { ?><span style="color:#fff; background:red"> <?=$_SESSION['error'] ?> <?php }?></span>
				</form>
					
			</div>
            </div>

			
		






</body>
</html>
