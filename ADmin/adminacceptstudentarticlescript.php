<?php
include("check.php");
$id = $_GET['id'];
// $id is now defined
// or assuming your column is indeed an int
// $id = (int)$_GET['id'];
mysqli_query($db,"UPDATE articles SET status='true' WHERE id='".$id."'");
mysqli_close($db);
header("Location: adminacceptstudentarticle.php");
?> 