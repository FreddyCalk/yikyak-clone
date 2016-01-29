<?php
	include 'inc/db_connect.php';

	if($_GET['vote'] == 'up'){
		$vote = 1;
	}else{
		$vote = -1;
	}

	$result = DB::query("SELECT * FROM post_votes WHERE uid='".$_GET['uid']."' AND pid ='".$_GET['pid']."'");
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
	// print '<pre>';
	// print_r($_GET);
	// print_r($result);
	// exit;

	if((sizeof($result)>0)&&($result[0]['vote'] == 1)&&($vote == -1)){
		DB::query("UPDATE post_votes SET vote = $vote WHERE pid = $pid AND uid = $uid");
	}else if((sizeof($result)>0)&&($result[0]['vote'] == -1)&&($vote == 1)){
		DB::query("UPDATE post_votes SET vote = $vote WHERE pid = $pid AND uid = $uid");
	}else if(sizeof($result)==0){
		DB::insert('post_votes', array(
		'pid' => $_GET['pid'],
		'uid' => $_GET['uid'],
		'vote' => $vote
		));
	}



	
	if($_GET['view']){
		header('Location: user.php?user='.$_GET['view']);
	}else{
		header('Location: /');
	}