<?php
	include 'inc/db_connect.php';

	if(isset($_POST['userName'])){
		// print $_POST['email'];
		// print $_POST['password'];

		$hashed_password = md5($_POST['password']."freddy's little secret");
		// print $hashed_password;
		// exit;


		//USER SUBMITTED SOMETHING.
		//NOW WHAT?
		//Check to see if this user is in the DB!!
		$result = DB::query("SELECT * FROM users 
			WHERE username = '" . $_POST['userName']."' 
				AND password = '" . $hashed_password . "'");
		

		// print '<pre>';
		// print_r($result);
		// exit;
		if(mysql_num_rows($result) == 1){
			//We have a match!!
			$_SESSION['username'] = $_POST['userName'];
			header('Location: /index.php');
		}else{
			//we do not have a match. Goodbye.
			header('Location: http://local-phpland.com/signup.php?result=failure');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YikYak Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
	if($_GET['result'] == 'failure'){
		print "<h1>Your login information does not match any record in our system. Please retry or contact Freddy.";
	}
?>
	<div class="container">
		<div class="row">
			<h1 id="signin" class="col-xs-8 col-xs-offset-2" id="login-header">Registration</h1>
		</div>
		<form method="post" action="signup.php">
			<div class="row">
				<input class="form-control" type="text" name="name" placeholder="Full Name...">
			</div>
			<div class="row">
				<input class="form-control" type="email" name="email" placeholder="Email Address...">
			</div>
			<div class="row">
				<input class="form-control" type="text" name="userName" placeholder="Username...">
			</div>
			<div class="row">
				<input class="form-control" type="password" name="name" placeholder="Password...">
			</div>
			<div class="row">
				<input class="col-xs-3 col-xs-offset-3 btn btn-success" type="submit" value="Register">
				<input class="col-xs-3 btn btn-danger" type="button" value="Cancel">
			</div>
		</form>

	</div>


</body>
</html>
