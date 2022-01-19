 <?php
$con = mysqli_connect('localhost','root','','demodatabase');
if(isset($_POST['save']))
{
	$id=$_POST['id'];
	$name=$_POST['edit_nm'];
	$size=$_POST['edit_size'];
	$color=$_POST['edit_color'];
	$desc=$_POST['edit_desc'];
	$weight=$_POST['edit_weight'];
	$quan=$_POST['edit_qua'];
	$price=$_POST['edit_price'];

	$query="update product set p_name='{$name}',p_size='{$size}',p_color='{color}',p_description='{$desc}',p_weight='{$weight}',p_quantity='{$quan}',p_price='{$price}' where p_id='".$id."'";
	$update=mysqli_query($con,$query);
	if($update)
	{
		echo "<script type= \"text/javascript\">
				alert(\"Update seccessfully....\");
				window.location=(\"product.php\")</script>";
		
	}
	else
	{
		echo "<script type= \"text/javascript\">
				alert(\"update error...\");
				window.location=(\"product.php\")</script>";
	}



}




 ?>