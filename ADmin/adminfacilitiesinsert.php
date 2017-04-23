<?php 
include("adminheader.php");
?>
<div class="container-fluid">
    <div class="row">
		<div class="col-md-2">
        	<?php include("navigation.php");
			?>
    	</div>
    	<div class="col-md-5">
		<div class="well">
        	<form method="post" action="" enctype="multipart/form-data">
            	<h1>Insert Facilities Data</h1>
				<div class="form-group">
            		Heading:</br>
            		<input type="text" class="form-control" name="heading" required="required"/>
            	</div>
				<div class="form-group">
					Info:</br>
            		<textarea rows="4" cols="50" class="form-control" name="info" required="required"></textarea>
            	</div>
				<div class="form-group">
            	<input type="hidden" name="size" value="350000">
            	<input type="file" name="photo1"> 
            	</div>
				
            	<input TYPE="submit" name="upload" title="Add data to the Database" value="Add Data"/>
          	</form>
		<div>
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
	$name1=$_FILES['photo1']['name'];
	
	$tmp1 = $_FILES['photo1']['tmp_name'];
	
	move_uploaded_file($tmp1, $path.$name1);
	
	$sql = "insert into facilities  values(?,?,?,?)";
	$stmt = mysqli_prepare($db,$sql);
	mysqli_stmt_bind_param($stmt,'dsss',$id,$heading,$info,$name1);
	mysqli_stmt_execute($stmt);
	$check = mysqli_stmt_affected_rows($stmt);
	if($check){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Inserted')
                window.location.href='adminfacilitiesview.php';
                </SCRIPT>");
	}
	mysqli_close($db);
}
?>