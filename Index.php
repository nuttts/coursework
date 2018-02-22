<!DOCTYPE HTML>
<html>
<link href="style.css" type="text/css" rel="stylesheet">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<body>
	<div class="container-fluid">
		<div class="topnav" id="myTopnav">
			<a class="active">Login</a>
			<a href="register.html">Register</a>
		</div>
	</div>
	<form action="usercheck.php" method="post">
	<input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
	<input type="password" name="pword" class="form-control" placeholder="Password" required autofocus><br>
	<input type="submit" name="form_submit" placeholder="submit"><br>
	
</body>
</html>
