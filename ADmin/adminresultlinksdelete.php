<?php
include("check.php");
$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];
mysqli_query($db,"DELETE FROM resultlinks WHERE id='".$id."'");
mysqli_close($db);
header("Location: adminresultlinksview.php");
?> 