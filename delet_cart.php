<?php
session_start();
$con = mysqli_connect('localhost','root','','demodatabase');
$id=$_GET['id'];

$query="delete from addtocart where cart_id='".$id."'";
$result=mysqli_query($con,$query);
echo "<script type= \"text/javascript\">
		alert(\"Removed...\");
		window.location=(\"showaddtocart.php\")</script>";

?>