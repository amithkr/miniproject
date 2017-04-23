<?php
	include("check.php");		
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h1>Hello, <em><?php echo $login_user;?>!</em></h1>
		</div>
		<div class="col-md-6">
			<text-align="right"><a href="logout.php" style="font-size:18px">Logout?</a></text-align>
		</div>
	</div>
</div>