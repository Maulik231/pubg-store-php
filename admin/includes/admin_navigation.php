 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PUBG Store Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../admin/index.php">Home</a></li>
                
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ucfirst($_SESSION['c_name']); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Product<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="product.php">All Product</a>
                            </li>
                            <li>
                                <a href="add_product.php">Add Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-desktop"></i> Categories</a>
                    </li>
                    <li>
                        <a href="query.php"><i class="fa fa-fw fa-wrench"></i>Orders</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="users.php">All Users</a>
                            </li>
                            <!-- <li>
                                <a href="users.php?source=update_user">Edit Buses</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                    <!-- <li>
                        <a href="report.php"><i class="fa fa-fw fa-book"></i> Reports</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>