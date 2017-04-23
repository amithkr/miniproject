<?php
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: adminhome.php');
	}		
?>
<!doctype html>
<html>



	<?php
	include_once("header.php");
	?>


	<div class="container">
		
		<div class="row login">
			<div class="col-md-3">
				</div>
				<div class="col-md-5">
  					<form method="post" action="">
    				<div class="form-group">
      				<label for="username">UserName</label>
      				<input type="text" class="form-control" name="username" id="username" placeholder="Enter email">
    				</div>
    				<div class="form-group">
      				<label for="password">Password:</label>
      				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    				</div>
    
    				<button type="submit" name="submit" class="btn btn-default">Submit</button>
  					</form>
	  			</div>
		</div>
	</div>
	
<?php
	include("footer.php");
	?>   