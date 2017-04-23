<?php
include("header.php");
?>
<div class="container">
<!-- Trigger the modal with a button -->
<?php
                $ab=1;
                
                 $sql="SELECT * FROM facilities";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                    $as=$ab-1;
                if(($as%6)==0){
                    echo '<div class="row">';
                }
                $id=$row['id'];
                echo '<div class="col-md-2 facilities">';
                echo '<button type="button" class="" data-toggle="modal" data-target="#';
                echo $id;
                $src='ADmin/images/'.$row['image1'];
                echo '"';
                echo "><img src='$src' width='250px'; height='180px';/></button>";
    
                
             
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
  

  <!-- Modal -->
  
    <?php
    $sql="SELECT * FROM facilities";
    $result=mysqli_query($db,$sql)or die(mysqli_error());
    while($row=mysqli_fetch_array($result)){
        echo '<div class="modal fade" id='; 
        echo $row['id'];
        echo ' role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->';
      echo '<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>';
          echo '<h4 class="modal-title">'; echo $row['heading']; echo '</h4>
        </div>
        <div class="modal-body">';
          echo '<p>'; echo $row['info'];echo '</p>';
          
          $src='ADmin/images/'.$row['image1'];
            echo "<img src='$src' width='400px' height='200px'/></button>";
            echo '
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>';
  }?>
</div>
<?php
include("footer.php");
?>