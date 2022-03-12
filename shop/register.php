<?php
session_start();
include("includes/conn/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user registration</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>


<div class="login-box">
<div class="col-md=6 login-right">
				<h2>Register Here</h2>
				<form action="UserProcessor.php" method="post">
			
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>

                    <input type="hidden" name="LogReg" value="register">
                    <div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>State</label>
						<input type="text" name="state" class="form-control" required>
					</div>
                    
                    <div class="form-group">
						<label>Country</label>
						<input type="text" name="country" class="form-control" required>
                        
					</div>

                    
<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
            </div>

            </body>
</html>