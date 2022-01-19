<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php";
       
         ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcone To Admin
                            <small>Product Panel</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'add_bus':
                                include "includes/add_bus.php";
                                break;
                            
                            case 'update':
                                include "includes/update.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Product_id</th>
                                        <th>Product_name</th>
                                        <th>Product_size</th>
                                        <th>Product_color</th>
                                        <th>Product_description</th>
                                        <th>Product_weight</th>
                                        <th>Product_image</th>
                                        <th>Product_Quentity</th>
                                        <th>Product_price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        


                                    </tr>
                                </thead>
                                <?php

                                $con = mysqli_connect('localhost','root','','demodatabase');
                                $c_id = $_SESSION['c_id'];
                                

                                 $query="select * from product";
                                 $result=mysqli_query($con,$query);
                                 while($row=mysqli_fetch_row($result))
                                 {


                                    ?>
                                    <tr>
                                        <td><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[6];?></td>
                                        <td><img style="width: 50px; height: 50px;" src="../images/<?php echo $row[7]; ?>" class="img-responsive" alt="">
                                        <td><?php echo $row[8];?></td>
                                        <td><?php echo $row[9];?></td>
                                        <?php
                                         echo "<td>";
                                        echo "<a href='edit_product.php?id=".$row[0]."'><font color='blue'>Edit</font></a>";
                                        echo "</td>";
                                        echo "<td>";
                                        echo "<a href='del_product.php?id=".$row[0]."'><font color='red'>Remove</font></a>";
                                        echo "</td>";
                                    ?>                                                     
                                    </tr>


                               <?php     
                                 }







                                ?>

                                <tbody>
                                    
                                   
                                </tbody>
                                </table><?php
                                break;
                        }
                        // if ($source = 'add_bus') {
                        //        include "includes/add_bus.php";   
                        // }
                        // elseif ($source = '') {
                        //     
                        // }   
                        ?>


                        <?php

                       
                       



                         

                        if (isset($_GET['delete'])) {
                            
                            $bus_idd = $_GET['delete'];
                            // echo "$bus_idd";
                            $query = "DELETE FROM posts WHERE post_id = {$bus_idd} ";

                            $delete_bus = mysqli_query($connection,$query);
                            if(!$delete_bus) {
                                die("Query Failed" . mysqli_error($delete_bus));
                            }
                            header("Location: buses.php");
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