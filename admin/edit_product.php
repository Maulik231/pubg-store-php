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
                            <small>Product Edit Panel</small>
                        </h1>
                        <?php
                        $con = mysqli_connect('localhost','root','','demodatabase');
                        $id= $_GET['id'];
                        $query="select * from product where p_id='".$id."'";
                        $result=mysqli_query($con,$query);
                        while($row=mysqli_fetch_row($result))
                        {
                            ?>
                            <center>

                            <form method="POST" action="edit_pro_process.php" style="background-color: #0006;width: 80%;height: 300px;">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div style="float: left; margin-top: 20px; padding-left: 10px;" >
                                        Product_name: <input style="width:300px;float: right;" type="text" name="edit_nm" value="<?php echo $row[1];?>"></br></br>
                                        Product_size:  <input style="width:300px" type="text" name="edit_size" value="<?php echo $row[2];?>"></br></br>
                                        Product_weight: <input style="width:300px;float: right;" type="text" name="edit_weight" value="<?php echo $row[5];?>"></br></br>

                                </div>
                                <div style="float: right; margin-top: 20px; padding-right:10px;" >
                                        Product_color: <input style="width:400px;float: right;" type="text" name="edit_color" value="<?php echo $row[3];?>"></br></br>
                                        Product_description:  <input style="width:400px" type="text" name="edit_desc" value="<?php echo $row[4];?>"></br></br>
                                        Product_Quantity: <input style="width:400px;float: right;" type="text" name="edit_qua" value="<?php echo $row[8];?>"></br></br>                              
                                    
                                </div>

                                Product_price: <input style="width:300px;float: center;" type="text" name="edit_price" value="<?php echo $row[9];?>"></br></br></br></br>
                                <input style="width: 200px; height: 30px;" type="submit" name="save" value="Save">

                            </form>
                            </center>



                            <?php
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