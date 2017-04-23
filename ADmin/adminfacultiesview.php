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
            <?php
            $sql = "SELECT * FROM faculties";
            $result = mysqli_query($db,$sql)or die(mysqli_error());
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>EMAIL ID</th>
                    <th>ADDRESS</th>
                    <th>SUBJECTS</th>
                    <th>Section</th>
                    <th>DateOfJoining</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                //echo "<table>";
                //echo "<tr><th>ID</th><th>Name</th><th>Designation</th><th>edit</th><th>Delete</tr>";
                while($row = mysqli_fetch_array($result)) 
                {
                    $id = $row['id'];
                    $name = $row['name'];
                    $eid=$row['emailid'];
                    $address=$row['address'];
                    $doj=$row['doj'];
                    $section=$row['department'];
                    $address=$row['address'];
                    $subjects=$row['subjects'];
                    $designation = $row['designation'];
                    //$image=$row['image'];
                    echo "<tr>
                        <td><center>".$id."</center></td>
                        <td><center>".$name."</center></td>
                        <td><center>".$designation."</center></td>
                        <td><center>".$eid."</center></td>
                        <td><center>".$address."</center></td>
                        <td><center>".$subjects."</center></td>
                        <td><center>".$section."</center></td>
                        <td><center>".$doj."</center></td>";
                    echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width:150px;height:100px;"/></td>';
                    echo "<td><a href=\"adminfacultiesedit.php?id=".$row['id']."\">edit</a></td>
                        <td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href=\"adminfacultiesdelete.php?id=".$row['id']."\">Delete</a></td>
                        </tr>";
                } 
                echo "</table>";
                mysqli_close($db);
                ?>
        </div>
    </div>
