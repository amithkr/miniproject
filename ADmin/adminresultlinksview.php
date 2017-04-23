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
            $sql="SELECT * FROM resultlinks";
            $result=mysqli_query($db,$sql)or die(mysqli_error());
            while($row=mysqli_fetch_array($result))
            {
                echo '<div>';
                echo "<h1>".$row['heading']."</h1>";
                echo "<p>".$row['linkurl']."</p>";
                echo "
                <a onClick=\"javascript: return confirm('Please confirm deletion');\" href=\"adminresultlinksdelete.php?id=".$row['id']."\">Delete</a>";
                echo '</div>';
            }
            ?>
            </div>
            </div>
           