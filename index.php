<?php

	include('inc/db_connect.php');

	if($_GET['logout']){

		session_destroy();
		header('Location: index.php');
	}

	if($_SESSION['username']){
		$results = DB::query("SELECT * FROM posts
			LEFT JOIN users ON users.uid = posts.uid
			ORDER BY posts.timestamp desc limit 30");
	}

	if(!$_SESSION['username']){
		header('Location: login.php');
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

	<?php include 'header.php'; ?>

	<div class="container">
		<?php
		if(isset($_SESSION['username'])){
			foreach($results as $result){
				$votes = DB::query("SELECT * FROM post_votes WHERE pid=%i",$result['pid']);
				$post_votes = 0;
				if(sizeof($votes) !== 0){
					foreach($votes as $vote){
						$post_votes += $vote['vote'];
					}
				}

				print "<div class='post-container'><div class='user'><a href='/user.php?user=". $result['uid'] ."'>@" . $result['username'] . "</a></div>";
				print "<div class='post-content'>" . $result['body'] . "</div>";
				print "<div class='post-time'>". $result['timestamp'] ."</div>";
				print "<div class='vote-container'><a href='process_vote.php?pid=".$result['pid']."&uid=".$result['uid']."&vote=up'><span class='glyphicon glyphicon-menu-up up-vote'></span></a>";
				print "<span class='votes'>".$post_votes."</span>";
				print "<a href='process_vote.php?pid=".$result['pid']."&uid=".$result['uid']."&vote=down'><span class='glyphicon glyphicon-menu-down down-vote'></span></a></div>";
				print "</div>";
			}
		}
		?>
	</div>

	
	
</body>
</html>

