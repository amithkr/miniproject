<?php
include("header.php");
?>
<div class="container-fluid achievements">
    <div class="row homeblock"></div>
    <div class="col-md-7">
        <?php
            $sql="SELECT * FROM achievements ";
            $result=mysqli_query($db,$sql)or die(mysqli_error());
            $a=0;
            while($row=mysqli_fetch_array($result)){
                echo '<div class="well">
                     <div class="media ">';
                echo '<div class="media-body achieve">';
                echo "<h4 class='media-heading'>".$row['heading']."";
                echo '</h4>';
                echo "<p>".$row['info']."</p>";
                echo '</div>';
                echo '<div class="media-right media-middle">';
                $src='ADmin/images/'.$row['image1'];
                echo "<img src='$src' width='400px' height='200px'/>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>
<?php
include("footer.php");
?>