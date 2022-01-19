<!DOCTYPE html>
<html>
<head>
	<title>Adminpanle Product</title>
	
<body>
	<?php
		if(isset($_GET['product']))
		{
			$p_name=$_GET['p_name'];
			$p_size=$_GET['p_size'];
			$p_color=$_GET['p_color'];
			$p_description=$_GET['p_description'];
			$cat_id=$_GET['cat_id'];
			$p_weight=$_GET['p_weight'];
			$p_image=$_GET['p_image'];
			$p_quantity=$_GET['p_quantity'];
			$p_price=$_GET['p_price'];
			$con = mysqli_connect('localhost','root','','demodatabase');
			$sql = "INSERT INTO product(p_name,p_size,p_color,p_description,cat_id,p_weight,p_image,p_quantity,p_price) VALUES ('$p_name','$p_size','$p_color','$p_description','$cat_id','$p_weight','$p_image','$p_quantity','$p_price')";
			mysqli_query($con,$sql);	
		}	
	?>

	<form action="" method="get"> 
		<label> <font size="5" face="Times New Roman, Times, serif" >AdminPanleProduct</font> </label>
		<p> <input type="text" name="p_name" placeholder="Enter p_name"></p>
		<p> <input type="text" name="p_size" placeholder="Enter p_size"></p>
		<p> <input type="text" name="p_color" placeholder="Enter p_color"></p>
		<p> <input type="text" name="p_description" placeholder="Enter p_desc"></p> 
		<p> <input type="text" name="cat_id" placeholder="Enter cat_id"></p>
		<p> <input type="text" name="p_weight" placeholder="Enter p_weight"></p>
		<p> <input type="file" name="p_image"> ChooseProduct Image</p>
		<p> <input type="text" name="p_quantity" placeholder="Enter p_quantity"></p>
		<p> <input type="text" name="p_price" placeholder="Enter p_price"></p>
		<p> <button value="UPLOAD" name="product" type="submit">Add Product</button> </p> 
	</form> 
</body>
</html>