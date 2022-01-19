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
                            <small>Author</small>
                        </h1>



                        <div class="col-xs-6">

                            <?php

                                if (isset($_GET['delete'])) {
                                     $con = mysqli_connect('localhost','root','','demodatabase');
                                    $cat_del_id = $_GET['delete'];

                                    $query = "DELETE FROM catagory WHERE cat_id=$cat_del_id";

                                    $delete_cat = mysqli_query($con,$query);

                                }

                            ?>




                            <?php 
                            if(isset($_POST['submit'])) {
                                 $con = mysqli_connect('localhost','root','','demodatabase');
                                $cat_title = $_POST['cat_title'];
                                $cat_desc=$_POST['cat_desc'];
                              

                                $query = "INSERT INTO `catagory`(`cat_name`,`cat_description`) VALUES('$cat_title','$cat_desc')";
                                $create_category = mysqli_query($con,$query);

                                if(!$create_category) {
                                    die("Query Failed");
                                }
                            }
                            ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_tite">Add Categories</label>
                                    <input class="form-control" type="text" name="cat_title" placeholder="catagory name" required=""><br>
                                    <input class="form-control" type="text" name="cat_desc" placeholder="catagory description" required="">

                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                                </div> 
                            </form>
                        </div>

                        <div class="col-xs-6">

                            <?php 
                             $con = mysqli_connect('localhost','root','','demodatabase');
                            $query = "SELECT *  FROM  catagory";
                            $select = mysqli_query($con,$query);
                            ?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                        <th>Category Description</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php  
                                        while($row=mysqli_fetch_row($select)) 
                                        {
                                                $cat_id = $row[0];
                                                $cat_title = $row[1];
                                                $cat_desc=$row[2];

                                                echo "<tr>";
                                                echo "<td> {$cat_id} </td>";
                                                echo "<td> {$cat_title} </td>";
                                                echo "<td> {$cat_desc} </td>";

                                                echo "<td><a href='categories.php?delete=$cat_id'>Delete</a></td>";
                                                echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>