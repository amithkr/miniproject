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
        <form method="post" action="" enctype="multipart/form-data">
            <h1>Insert Important Links</h1>

            <div class="form-group">
            Heading:</br>
            <input type="text" name="heading"class="form-control" required="required"/>
            </div>
            <div class="form-group">
            link url:</br>
            <textarea rows="4" cols="50" name="linkurl"class="form-control" required="required"></textarea>
            
            </div>
            <div class="form-group">
            Tags:</br>
            <input type="text"class="form-control" name="tags"/>
            </div>
            
            <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Data"/>
          </form>
          </div>
    </div>
    <?php
    //include_once('connection.php');
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {
        $heading=$_POST['heading'];
        $linkurl=$_POST['linkurl'];
        $tags=$_POST['tags'];
        //$ext1=explode(".",$name1);
        //$ext2=explode(".",$name2);
        //$ext3=explode(".",$name3);

        //$actual_image_name1 = md5_file($name1).time().".".$ext1;
        //$actual_image_name2 = md5_file($name2).time().".".$ext2;
        //$actual_image_name3 = md5_file($name3).time().".".$ext3;

        $sql = "insert into resultlinks  values(?,?,?,?)";
        $stmt = mysqli_prepare($db,$sql); 
        mysqli_stmt_bind_param($stmt,'dsss',$id,$heading,$linkurl,$tags);
        mysqli_stmt_execute($stmt);
        //mysqli_query($db,"INSERT INTO image  VALUES $actual_image_name");
        //echo "<img src='images/".$actual_image_name."' class='preview'>";
         $check = mysqli_stmt_affected_rows($stmt);
         if($check){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Inserted')
                window.location.href='adminresultlinksview.php';
                </SCRIPT>");
            }
        mysqli_close($db);
    }
?>
