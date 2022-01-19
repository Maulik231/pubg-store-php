
<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcone To Admin
                            <small>Show_orders Panel</small>
                        </h1>


                        
                        	<table class="table table-hover">
            	 <thead>
                <tr>
                	<th>Order_Id</th>
	         		 <th>Image</th>
	         		 <th>product name</th>
	          		<th>size</th>
	          		<th>color</th>
	         		 <th>detail</th>
	         		 <th>weight</th>
	         		 <th>Price</th>
	         		 <th>Status</th>
	          	
                </tr>
              </thead>
                        <?php
                        if(isset($_GET['show']))
                        {
                            $usert_id=$_GET['show'];
                           $q="select * from order_master where c_id='".$usert_id."'";
              	$r=mysqli_query($con,$q);
              	while($row=mysqli_fetch_row($r))
              	{
              		


              		echo "<tr>";
              		echo "<td>".$row[0]."</td>";
              		$p_id=$row[5];
              		$qu="select * from product where p_id='".$p_id."'";
              		$re=mysqli_query($con,$qu);
              		while($roww=mysqli_fetch_row($re))
              		{

						?>			
						<td><img style="width: 50px; height: 50px;" src="../images/<?php echo $roww[7]; ?>" class="img-responsive" alt="">
              		<?php
              		echo "<td>".$roww[1]."</td>";
              		echo "<td>".$roww[2]."</td>";
              		echo "<td>".$roww[3]."</td>";
              		echo "<td>".$roww[4]."</td>";
              		echo "<td>".$roww[6]."</td>";
              		echo "<td>".$roww[9]."</td>";

              		echo "<td>".$row[9]."</td>";

              	}
              		}


                        }


         ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>