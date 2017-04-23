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
    <?php
        $msg = '';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $image = $_FILES['image']['tmp_name'];
            $img = file_get_contents($image);
            $name=$_POST['facultyname'];
            $address=$_POST['address'];    
            $insertdoj = date('Y-m-d', strtotime($_POST['doj']));
            $department=$_POST['department'];
            $subject=$_POST['subjects'];
            //$id=$_POST['id'];
            $post="staff";
            $eid=$_POST['emailid'];
            $designation=$_POST['designation'];
            $con = mysqli_connect('localhost','root','','mini') or die('Unable To connect');
            $sql = "insert into faculties  values(?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($con,$sql); 
            mysqli_stmt_bind_param($stmt,'dsssssssss',$id,$name,$designation,$eid,$img,$address,$department,$insertdoj,$subject,$post);
            mysqli_stmt_execute($stmt);
            $check = mysqli_stmt_affected_rows($stmt);
            if($check==1){
                $msg = 'Successfullly UPloaded';
            }else{
                $msg = 'Could not upload';
            }
            if($check){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Inserted')
                window.location.href='adminfacultiesview.php';
                </SCRIPT>");
            }
            unset($_POST);
            mysqli_close($con);
        }
    ?>
    
        <form action="adminfacultiesinsert.php" method="post" enctype="multipart/form-data">
            <h1>Insert Staff Data</h1>
            <div class="form-group">
            Name:</br>
            <input type="text" name="facultyname"class="form-control" required="required"/>
            </div>
           <div class="form-group">
            Designation:</br>
            <select name="designation"class="form-control" required="required">
                <option value="">Select....</option>
                <option value="HSST">HSST</option>
                <option value="HST">HST</option>
                <option value="OFFICE STAFF">OFFICE STAFF</option>
            </select>
           
            </div>
            <div class="form-group">
            Email id:</br>
            <input type="text" name="emailid"class="form-control" required="required"/>
            </div>
            <div class="form-group">
            DateOfJoining</br>
            <input type="text" name="doj" id="datepicker"class="form-control" required="required"/>
            </div>
            <div class="form-group">
            Address</br>
            <input type="text" name="address"class="form-control" required="required"/>
            </div>
            <div class="form-group">
            DEPARTMENT</br>
            <select name="department"class="form-control" required="required">
                <option value="">Select...</option>
                <option value="hss">HSS</option>
                <option value="hs">HS</option>
                <option value="office">OFFICE</option>
            </select>
            
            </div>
            <div class="form-group">
            SUBJECTS</br>
            <input type="text" name="subjects"class="form-control" required="required"/>
            </div>
            
            Upload image</br>
            <input type="file" name="image" required="required"/>
           
            
            
            <button>Insert Data</button>
        </form>
        <?php echo $msg;?>
        </div>
    </div>
