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
                            <small>Order Panel</small>
                        </h1>
                        <table class="table table-bordered table-hover">
                                
                                    <tr>
                                        <th>Order_ID</th>
                                        <th>Order_date</th>
                                        <th>Customer_id</th>
                                        <th>Customer_name</th>
                                        <th>delivery_date</th>
                                        <th>amount</th>
                                        <th>product_id</th>
                                        <th>Tracking_id</th>
                                        <th>payment_type</th>
                                        <th>address</th>
                                        <th>status</th>
                                     </tr>
                                

                       <?php
                        $con = mysqli_connect('localhost','root','','demodatabase');
                           $query="select * from order_master";
                           $result=mysqli_query($con,$query); 
                           while($row=mysqli_fetch_row($result))
                           {
                    
                            $c_id=$row[2];

                            $que="select * from customer where c_id='".$c_id."'";
                            $re=mysqli_query($con,$que);
                            while($ro=mysqli_fetch_row($re))
                            {
                            
                            
                                     echo  "<tr>";
                                     echo   "<td>".$row[0]."</td>";
                                     echo  "<td>" . $row[1] ."</td>";
                                     echo    "<td>". $row[2]."</td>";
                                     echo  "<td>".$ro[1]."</td>";
                                     echo "<td>".$row[3]."</td>";
                                     echo "<td>".$row[4]."</td>";
                                     echo  "<td>".$row[5]."</td>";
                                     echo "<td>". $row[6]."</td>";
                                     echo "<td>". $row[7]."</td>";
                                     echo "<td>".$row[8]. "</td>";
                                     echo "<td>".$row[9]."</td>";


                                   echo "</tr>";
                                
                          


                    
                            }
                           }
                           ?>
                    
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>