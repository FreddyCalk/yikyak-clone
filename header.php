	<div id='button-wrapper' style="float:right">
		<?php
			if($_SESSION['username']){
				print '<a href="/index.php?logout=true" class="btn btn-danger">Logout</a>';
			}else{
				print '<a href="/login.php" class="btn btn-success">Login</a>';
				print '<a href="/signup.php" class="btn btn-primary">Register</a>';
			}
		?>
	</div>
	<?php print "<a id='home-link' href='index.php' style='display:inline'><h1 style='display:inline'> &nbsp Freddy's YIK YAK</h1></a>"; ?>