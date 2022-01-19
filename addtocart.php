<?php
session_start();
$con = mysqli_connect('localhost','root','','demodatabase');
$p_id=$_GET['p_id'];
$c_id = $_SESSION['c_id'];
$_SESSION['p_id']=$p_id;
$quentiti=1;
//echo $p_id;
$que="select * from product where p_id=$p_id";
$re=mysqli_query($con,$que);
while($row=mysqli_fetch_row($re))
{
	$quntity= $row[8];
	$price=$row[9];

}

if(isset($_GET['addtocartclick']))
{
	
	if($quntity>0)
	{
		//echo $quntity;
		$query="INSERT INTO addtocart(p_id,p_quantity,c_id,p_price) VALUES('$p_id','$quentiti','$c_id','$price')";
		mysqli_query($con,$query);
		echo "<script type= \"text/javascript\">
				alert(\"Product Added....\");
				window.location=(\"index.php\")</script>";

	}
	else
	{
		echo "<script type= \"text/javascript\">
				alert(\"Out Of Stock....\");
				window.location=(\"index.php\")</script>";
								

	}
	

}
?>