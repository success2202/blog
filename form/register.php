<?php session_start(); ?>
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
				<form action="../UserProcessor.php" method="post">
			
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<input type="hidden" name="form_type" value="register">
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" required>
					</div>
<button type="submit" class="btn btn-primary">Register</button>
				</form>
			
				<?php if(isset($_SESSION['email'])) echo "<span style=\" color:red \">" .$_SESSION['email'] ."</span>" ?>
            
			</div>
            </div>
			</body>
</html>