<?php

	include 'inc/db_connect.php';	

	if(isset($_POST['newPost'])){
		$uid = $_SESSION['uid'];
		$post = $_POST['newPost'];
		DB::insert('posts', array(
			'uid' => $uid,
			'body' => $post
		));
		header('Location: /index.php');
	}
?>