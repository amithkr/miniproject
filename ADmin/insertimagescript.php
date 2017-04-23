<?php
include('connection.php');
$path = "images/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if(true) // Image size max 1 MB
{
$actual_image_name = time()."12".".".$ext;
$tmp = $_FILES['photo']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
    $sql = "insert into image  values(?)";
            $stmt = mysqli_prepare($db,$sql); 
            mysqli_stmt_bind_param($stmt,'s',$actual_image_name);
            mysqli_stmt_execute($stmt);
//mysqli_query($db,"INSERT INTO image  VALUES $actual_image_name");
echo "<img src='images/".$actual_image_name."' class='preview'>";
}
else
echo "failed";
}
else
echo "Image file size max 1 MB"; 
}
else
echo "Invalid file format.."; 
}
else
echo "Please select image..!";
exit;
}
?>