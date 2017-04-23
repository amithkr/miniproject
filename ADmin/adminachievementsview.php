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
            $sql="SELECT * FROM achievements";
            $result=mysqli_query($db,$sql)or die(mysqli_error());
            while($row=mysqli_fetch_array($result))
            {
                echo '<div>';
                echo "<h1>".$row['heading']."</h1>";
                echo "<p>".$row['info']."</p>";
                $src='/images/'.$row['image1'];
                echo "<p><img src='.$src'/></p>
                <a onClick=\"javascript: return confirm('Please confirm deletion');\" href=\"adminachievementsdelete.php?id=".$row['id']."\">Delete</a>";
                echo '</div>';
            }
            ?>
            </div>
            </div>
            </div>
           <?php 
include("adminfooter.php");
?>