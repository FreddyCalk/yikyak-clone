<?php
	
	include('inc/db_connect.php');

	$results = DB::query("SELECT * FROM users");

	if($_GET['logout']){
		session_destroy();
	}

?>


<!DOCTYPE html>
<html>
<head>
<title>Fred's Yik Yak</title>
<?php
	include 'inc/head.php';
?>
</head>
<body>

	

	<div id='button-wrapper' style="float:right">
	<?php
		if($_SESSION['username']){
			print '<a href="/index.php?logout=true" class="btn btn-danger">Logout</a>';
		}else{
			print '<a href="/login.php" class="btn btn-success">Login</a>';
			print '<a href="/signup.php" class="btn btn-primary">Register</a>';
		}
	?>
	</div>
	<?php print '<h1> &nbsp YIK YAK</h1>'; ?>
	
</body>
</html>

