<?php
	include 'inc/db_connect.php';

	if(isset($_POST)){
		$uid = $_SESSION['uid'];
		$who_to_follow = $_POST['uid_to_follow'];
		DB::insert('following', Array(
			'uid' => $uid,
			'uid_to_follow' => $who_to_follow
		));
	}



?>