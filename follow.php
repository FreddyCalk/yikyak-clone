<?php 
	include 'inc/db_connect.php';
	$results = DB::query("SELECT users.uid, users.username FROM users");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('inc/head.php') ?>
</head>
<body>
	<?php include('header.php') ?>

	<div class="container">
		
			<?php 
				foreach($results as $user){
					print '<div class="row" style="display:block">';
						print '<div class="user-container col-xs-4 col-xs-offset-4">';
							print '<div class="user" style="display:inline"><a href="/user.php?user='. $user['uid'] .'">@'.$user['username'].'</a></div>';
							print '<div class="follow-user" style="float:right"><button class="btn btn-primary follow-button" uid='.$user['uid'].'>Follow</button></div>';
						print '</div>';
					print '</div>';
				}
			?>
		</div>
	</div>


	<?php include('footer.php') ?>

</body>
</html>