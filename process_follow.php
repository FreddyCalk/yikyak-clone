<?php
	include 'inc/db_connect.php';
	print_r($_POST['uid_to_follow']);
	exit;

	try{
		DB::insert('following', array(
			'uid' => $_SESSION['uid'],
			'uid_to_follow' => $_POST['uid']
		));		
	}catch(MeekroDBException $e){
		header('Location: /follow.php?error=true');
		exit;
	}
	print json_encode("Success!");
?>