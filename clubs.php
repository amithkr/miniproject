<?php
include("header.php");
$id = $_GET['id'];
?>
<div class="container-fluid ">
  <div class="row homeblock"></div>
    <div class="row club">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li<?php if($id=="scout"){ echo ' class="active"';}?>><a  href="clubs.php?id=scout">Scout</a></li>
           <li<?php if($id=="vidyarangam"){ echo ' class="active"';}?> ><a  href="clubs.php?id=vidyarangam">Vidyarangam</a></li>
          <li<?php if($id=="music"){ echo ' class="active"';}?>><a  href="clubs.php?id=music">Music</a></li>
          <li<?php if($id=="english"){ echo ' class="active"';}?>><a  href="clubs.php?id=english">English</a></li>
          <li<?php if($id=="ss"){ echo ' class="active"';}?>><a  href="clubs.php?id=ss">Social Science</a></li>
          <li<?php if($id=="harithasena"){ echo ' class="active"';}?>><a  href="clubs.php?id=harithasena">Harithasena</a></li>
           <li<?php if($id=="malayalam"){ echo ' class="active"';}?>><a  href="clubs.php?id=malayalam">Malayalam</a></li>
           <li<?php if($id=="roadsafety"){ echo ' class="active"';}?>><a  href="clubs.php?id=roadsafety">Roadsafety</a></li>
        </ul>
        

      </div>
      <div class="col-md-8">
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            
            <?php
                $sql="SELECT * FROM club where clubname='$id' ";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                echo "<h5>".$row['heading']."</h5>";
                echo "<p>".$row['info']."</p>";
                }
            ?>
          </div>
        
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>