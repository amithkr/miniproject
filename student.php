<?php
include("header.php");
?>
<div class="container-fluid studentcorner">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="blankblock"></div>
        <div class="col-md-8">
        <?php
            $sql="SELECT * FROM articles WHERE status='true' ";
            $result=mysqli_query($db,$sql)or die(mysqli_error());
            $a=0;
            while($row=mysqli_fetch_array($result)){
                echo '<div class="well">
                     <div class="media ">';
                echo '<div class="media-body achieve">';
                echo "<h4 class='media-heading'>".$row['name']."";
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
        <div class="col-md-4">
            <div class="well">
            <form method="post" action="" enctype="multipart/form-data">
            <div class="page-header"><center><h1>Upload</h1></center></div>
            
            <div class="form-group">
            Heading:</br>
            <input type="text" name="heading" class="form-control"required="required"/>
            </div>
            
            <div class="form-group">
            Info:</br>
            <textarea rows="4" cols="50" name="info" class="form-control"required="required"></textarea>
            </div>
            
            <input type="hidden" name="size" value="350000">
            <input type="file" name="photo1"> 
            
            
            <input type="hidden" name="size" value="350000">
            <input type="file" name="photo2"> 
            
            
            <input type="hidden" name="size" value="350000">
            <input type="file" name="photo3"> 
            
            
            <input TYPE="submit" name="upload" title="Add data to the Database" value="Upload data"/>
          </form>
          </div>
        </div>
    </div>
</div>
<?php

$path = "images/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	$heading=$_POST['heading'];	
	$info=$_POST['info'];
    $status='false';
    $name1=$_FILES['photo1']['name'];
	$name2=$_FILES['photo2']['name'];
	$name3=$_FILES['photo3']['name'];
	$tmp1 = $_FILES['photo1']['tmp_name'];
	$tmp2 = $_FILES['photo2']['tmp_name'];
	$tmp3 = $_FILES['photo3']['tmp_name'];
	move_uploaded_file($tmp1, $path.$name1);
	move_uploaded_file($tmp2, $path.$name2);
	move_uploaded_file($tmp3, $path.$name3);
	$sql = "insert into articles  values(?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($db,$sql);
	mysqli_stmt_bind_param($stmt,'dssssss',$id,$heading,$info,$name1,$name2,$name3,$status);
	mysqli_stmt_execute($stmt);
	$check = mysqli_stmt_affected_rows($stmt);
	if($check){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Inserted')
                window.location.href='student.php';
                </SCRIPT>");
	}
	mysqli_close($db);
}
?>
<?php
include("footer.php");
?>