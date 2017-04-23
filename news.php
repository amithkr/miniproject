<?php
include("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 newsevents">
            
<div class="page-header">
    <h1>News & Events</h1>      
  </div>

   <?php
                $sql="SELECT * FROM news ";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                    echo '<div class="well">';
                echo "<h3>".$row['heading']."</h3>";
                echo "<h5>".$row['info']."</h5>";
                echo "</div>";
                }
                ?>
</div>
</div>
</div>
<?php
include("footer.php");
?>