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
                            <small>Display User Panel</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'update_user':
                                include "includes/update_user.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>UserName </th>
                                        <th>ContectNo</th>
                                        <th>EmailId</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>type</th>
                                        
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT *  FROM  customer";
                                        $select_users = mysqli_query($con,$query);
                                        
                                        while($row = mysqli_fetch_assoc($select_users)) {
                                            $user_id = $row['c_id'];
                                            $username = $row['c_name'];
                                            $user_contact = $row['c_contact'];
                                            $user_email = $row['c_email'];
                                            $user_address = $row['c_address'];
                                            $user_gender = $row['c_gender'];
                                            $user_role = $row['type'];  
                                                                                 
                                            
                                     ?>
                                    <tr>
                                        <td><?php echo $user_id ?></td>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $user_contact ?></td>
                                        <td><?php echo $user_email ?></td>
                                        
                                        <td><?php echo $user_address ?></td>
                                        <td><?php echo $user_gender ?></td>
                                        <td><?php echo $user_role ?></td>
                                        
                                        <?php echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>"; ?>
                                        <?php echo "<td><a href='users.php?source=update_user&user_id=$user_id'>Edit</a></td>"; ?>
                                        <?php echo "<td><a href='users.php?make_admin=$user_id'>Make Admin</a></td>"; ?>
                                        <?php echo "<td><a href='users.php?remove_from_admin=$user_id'>Remove From Admin</a></td>"; ?>
                                        <?php echo "<td><a href='show_orders.php?show=$user_id'>Show_Orders</a></td>"; ?>
                                    </tr>
                                    <?php } ?>
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
                            
                            $user_idd = $_GET['delete'];
                            // echo "$bus_idd";
                            $query = "DELETE FROM customer WHERE c_id = {$user_idd} ";

                            $delete_query = mysqli_query($con,$query);
                            
                            if(!$delete_query) {
                                die("Query Failed" . mysqli_error($con));
                            }
                            header("Location : users.php");
                        }

                        ?>

                        <?php 

                        if (isset($_GET['make_admin'])) {
                            $user_id = $_GET['make_admin'];
                            $query = "UPDATE customer SET type = 'admin' WHERE c_id = '$user_id'";
                            
                            $add_admin = mysqli_query($con, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($con));
                            }
                            header("Location: users.php");
                        }

                        ?>

                        <?php 

                        if (isset($_GET['remove_from_admin'])) {
                            $user_id = $_GET['remove_from_admin'];
                            $query = "UPDATE customer SET type = 'customer' WHERE c_id = '$user_id'";
                            
                            $add_admin = mysqli_query($con, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($con));
                            }
                            header("Location: users.php");
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