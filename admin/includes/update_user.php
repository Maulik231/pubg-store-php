
<?php

if (isset($_GET['user_id'])) {
	$edit_user_id = $_GET['user_id'];
}

$query = "SELECT *  FROM  customer WHERE c_id=$edit_user_id";
$posts=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($posts))
     {
        $user_id = $row['c_id'];
        $username = $row['c_name'];
        $user_contact = $row['c_contact'];
        $user_email = $row['c_email'];
        $user_address = $row['c_address'];
        $user_gender = $row['c_gender'];



?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">Username</label>
		<input type="text" class="form-control" name="user_name" value="<?php echo $username; ?>">
	</div>

	<div class="form-group">
		<label for="category">User_contact</label>
		<input type="text" class="form-control" name="user_contact" value="<?php echo $user_contact; ?>">
	</div>

		<div class="form-group">
		<label for="category">User_Email</label>
		<input type="text" class="form-control" name="user_email" value="<?php echo $user_email; ?>">
	</div>
	<div class="form-group">
		<label for="category">User_Address</label>
		<input type="text" class="form-control" name="user_address" value="<?php echo $user_address; ?>">
	</div>
		<div class="form-group">
		<label for="category">User_Gender</label>
		<input type="text" class="form-control" name="user_gender" value="<?php echo $user_gender; ?>">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update-user" value="Update">
	</div>
</form>
<?php

}
if (isset($_POST['update-user'])) {
	
	$user_name = $_POST['user_name'];
	$user_contact=$_POST['user_contact'];
	$user_email=$_POST['user_email'];
	$user_address=$_POST['user_address'];
	$user_gender=$_POST['user_gender'];
	
	

	$query = "UPDATE customer SET c_name = '$user_name', c_contact = '$user_contact' , c_email='$user_email',c_address='$user_address',c_gender='$user_gender' WHERE c_id=$edit_user_id ";
	
	//echo $title . " " . $admin;
	
	$update_user_detail = mysqli_query($con,$query);

	if (!$update_user_detail) {
		die("Query Failed" . mysqli_error($con));
	}
	else{
		echo "<script type= \"text/javascript\">
										alert(\"Update Successfully...\");
										window.location=(\"users.php\")</script>";
	}

}



?>