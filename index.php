<?php
	
	include('inc/db_connect.php');

	$results = DB::query("SELECT * FROM users");
	
	foreach($results as $result){
		print '<pre>';
		print_r($result);
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fred's Yik Yak</title>
	<link rel="stylesheet" href="assets/compass/css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

	<?php print '<h1> &nbsp And Australia was just like, "WTF MATE?!?!?!?!?!"</h1>'; ?>
	
</body>
</html>

