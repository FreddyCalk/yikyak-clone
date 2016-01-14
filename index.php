<?php

	include('inc/db_connect.php');

	if($_GET['logout']){

		session_destroy();
		header('Location: index.php');
	}

	$results = DB::query("SELECT * FROM users");


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

	<?php include 'header.php'; ?>

	
	
</body>
</html>

