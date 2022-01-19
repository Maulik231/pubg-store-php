<?php 
 	session_start(); 
 	$con = mysqli_connect('localhost','root','','demodatabase'); 
 	$sq="SELECT  * FROM product"; 
 	$res = mysqli_query($con,$sq); 
 	$row=mysqli_fetch_array($res);
 	$p_quantity=$row['p_quantity']; 
  	echo $p_quantity;
 	if(isset($_GET['addtocartclick'])) 
 	{
 		$c_id = $_SESSION['c_id']; 
 		$p_id=$_GET['p_id'];
 		$p_price=$_GET['p_price'];
 		$sql="SELECT * FROM addtocart WHERE p_id=$p_id AND c_id=$c_id";  
 		$res = mysqli_query($con,$sql); 
 		$row = mysqli_num_rows($res); 
 		if($row>=1) 
 		{
 			$sql="UPDATE addtocart set p_quantity=p_quantity+1 where p_id=$p_id and c_id=$c_id"; 
 		} 
 		else 
 		{
 			$sql = "INSERT INTO addtocart(p_id,c_id,p_quantity,p_price) VALUES ('$p_id','$c_id','$p_quantity','$p_price')"; 
 		}
 		
 		//echo "<script> location.replace('index.php')</script>"; 
 	}
?>