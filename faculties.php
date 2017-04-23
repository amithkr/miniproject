<?php
include("header.php");
?>
<div class="container">
<div class="row">
<div class="page-header">
<h1>Higher Secondary Staff</h1>
</div>
</br>

 <?php
                $ab=1;
                
                 $sql="SELECT * FROM faculties where designation='HSST'";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                    $as=$ab-1;
                if(($as%6)==0){
                    echo '<div class="row">';
                }
                echo '<div class="col-md-2 faculty">';
                
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width:150px;height:100px;"/>';
                 echo "<h1>".$row['name']."</h1>";
                echo "<p>".$row['address']."</p>";
             
                echo "</div>";
                if(($ab%6)==0){
                echo "</div>";
                }
                $ab++;
                }
                if(($ab%6)!=0){
                    echo "</div>";
                }
                ?>
</div>

<div class="row">
<div class="page-header">
<h1>High School Staff</h1>
</div>

 <?php
                $ab=1;
                
                 $sql="SELECT * FROM faculties where designation='HST'";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                    $as=$ab-1;
                if(($as%6)==0){
                    echo '<div class="row">';
                }
                echo '<div class="col-md-2 faculty">';
                
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width:150px;height:100px;"/>';
                 echo "<h1>".$row['name']."</h1>";
                echo "<p>".$row['address']."</p>";
             
                echo "</div>";
                if(($ab%6)==0){
                echo "</div>";
                }
                $ab++;
                }
                if(($ab%6)!=0){
                    echo "</div>";
                }
                ?>
</div>
</div>
<?php
include("footer.php");
?>