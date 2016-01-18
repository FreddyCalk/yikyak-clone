<?php
	include 'inc/db_connect.php';

	if($_GET['vote'] == 'up'){
		$vote = 1;
	}else{
		$vote = -1;
	}

	// DB::query();

	DB::insert('post_votes', array(
		'pid' => $_GET['pid'],
		'uid' => $_GET['uid'],
		'vote' => $vote
	));
	if($_GET['view']){
		header('Location: user.php?user='.$_GET['view']);
	}else{
		header('Location: /');
	}

?>