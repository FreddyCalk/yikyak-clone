<?php

	include 'inc/db_connect.php';

	if(isset($_GET['user'])){
		$result = DB::query("SELECT * FROM users WHERE uid=%i",$_GET['user']);
		// print '<pre>';
		// print_r($result);
		// exit;
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Yik Yak - <?php print $result[0]['username'] ?></title>
	<?php include 'inc/head.php'; ?>

</head>
<body>
	<?php include 'header.php'; ?>


	
</body>
</html>