<?php
include("adminheader.php");
$id=$_REQUEST['id'];
$query = "SELECT * from faculties where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    $id=$_REQUEST['id'];
    $name =$_REQUEST['name'];
    $age =$_REQUEST['designation'];
    $update="update faculties set name='".$name."', designation='".$age."' where id='".$id."'";
    $result=mysqli_query($db, $update) or die(mysqli_error());
    if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='adminfacultiesview.php';
    </SCRIPT>");
}
}
else 
{
?>
<div>
    <form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
    <p><select name="department" required="required">
                <option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
                <option value="hss">HSS</option>
                <option value="hs">HS</option>
                <option value="office">OFFICE</option>
            </select>
    <p><input type="text" name="designation" placeholder="Enter Age" required value="<?php echo $row['designation'];?>" /></p>
    <p><input name="submit" type="submit" value="Update" /></p>
    </form>
<?php } ?>
</div>
</div>
