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
        <form method="post" action="" enctype="multipart/form-data">
            <h1>Insert News/Events Data</h1>
            
            <div class="form-group">
            Heading:</br>
            <input type="text" name="heading" class="form-control"required="required"/>
            </div>
            <div class="form-group">
            Info:</br>
            <textarea rows="4" cols="50" name="info" class="form-control"required="required"></textarea>
            
            </div>
            <div class="form-group">
            Tags:</br>
            <input type="text"class="form-control" name="tags"/>
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
    <?php
    //include_once('connection.php');
    $path = "images/";
    $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {
        $heading=$_POST['heading'];
        $info=$_POST['info'];
        $tags=$_POST['tags'];
        $name1=$_FILES['photo1']['name'];
        $name2=$_FILES['photo2']['name'];
        $name3=$_FILES['photo3']['name'];
        $n="news";
        $name1=$n.$name1;
        $name2=$n.$name2;
        $name3=$n.$name3;
        //$ext1=explode(".",$name1);
        //$ext2=explode(".",$name2);
        //$ext3=explode(".",$name3);

        //$actual_image_name1 = md5_file($name1).time().".".$ext1;
        //$actual_image_name2 = md5_file($name2).time().".".$ext2;
        //$actual_image_name3 = md5_file($name3).time().".".$ext3;

        $tmp1 = $_FILES['photo1']['tmp_name'];
        $tmp2 = $_FILES['photo2']['tmp_name'];
        $tmp3 = $_FILES['photo3']['tmp_name'];

        move_uploaded_file($tmp1, $path.$name1);
        move_uploaded_file($tmp2, $path.$name2);
        move_uploaded_file($tmp3, $path.$name3);

        $sql = "insert into news  values(?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($db,$sql); 
        mysqli_stmt_bind_param($stmt,'dssssss',$id,$heading,$info,$name1,$name2,$name3,$tags);
        mysqli_stmt_execute($stmt);
        //mysqli_query($db,"INSERT INTO image  VALUES $actual_image_name");
        //echo "<img src='images/".$actual_image_name."' class='preview'>";
         $check = mysqli_stmt_affected_rows($stmt);
         if($check){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Inserted')
                window.location.href='adminnewseventsview.php';
                </SCRIPT>");
            }
        mysqli_close($db);
    }
?>
