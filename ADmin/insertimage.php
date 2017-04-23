

          <?php
include("adminheader.php");

?>
<form method="post" action="insertimagescript.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="350000">
            <input type="file" name="photo"> 
            <br/>
            <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Member"/>
          </form>