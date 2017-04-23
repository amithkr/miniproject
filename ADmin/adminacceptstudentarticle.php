<?php 
include("adminheader.php");
?>
<div class="container-fluid">
    <div class="row">
		<div class="col-md-2">
        	<?php include("navigation.php");
			?>
    	</div>
    	<div class="col-md-8">
    		<?php
			$sql="SELECT * FROM articles";
			$result=mysqli_query($db,$sql)or die(mysqli_error());
			while($row=mysqli_fetch_array($result))
			{
				echo '<div>';
				echo "<h1>".$row['name']."</h1>";
				echo "<p>".$row['info']."</p>";
				if($row['status']=="true"){
					echo "accepted";	
				}
				else{
					echo "<a onClick=\"javascript: return confirm('Sure to Accept Article');\" href=\"adminacceptstudentarticlescript.php?id=".$row['id']."\">Accept</a>";	
				}
				echo '</div>';	
			}
			?>
        </div>
    </div>
</div>
           