<?php session_start();

if(isset($_SESSION['c_id']))
{
	if($_SESSION['type']=="admin")
	{
		echo "<script type= \"text/javascript\">
										alert(\"You login as admin...\");
										window.location=(\"admin/index.php\")</script>";
	}

}


 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--<?php 

//session_start();
//header("location: index.php")

?>-->
<!DOCTYPE html>
<html>
<head>
<title>PUBG STORE is a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>&nbsp;<big>PUBG STORE</big><span> Best One Stop Solution</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<?php
						if(isset($_SESSION['c_email']))
						{
							echo "<li><a href='logout.php'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</li>";
						}
						else
						{
							echo "<li><a href='login.php'><i class='fa fa-sign-in' aria-hidden='true'></i>Login</a></li>";
						}
					 if(isset($_SESSION['c_name']))
						{
							echo "<li><i class='fa fa-user' aria-hidden='true'></i>".$_SESSION['c_name']."</li>";
						}
						else
						{
							echo "<li><a href=register.php ><i class='fa fa-user-plus' aria-hidden='true'></i>User Register</a></li>";
						}
					?>	
					<li><a href="about.php" ><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a></li>
					<li><a href="faqs.php" ><i class="fa fa-ship" aria-hidden="true"></i>FAQs</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="https://www.facebook.com" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://twitter.com" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://in.pinterest.com" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://dribbble.com" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class="active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>News<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="news.php#Latest_News"><i class="fa fa-angle-right" aria-hidden="true"></i>Latest News</a></li>
												<li><a href="news.php#RageGear-TDM"><i class="fa fa-angle-right" aria-hidden="true"></i>RageGear-TDM</a></li>
												<li><a href="news.php#PlayLoad_Mode"> <i class="fa fa-angle-right" aria-hidden="true"></i>PlayLoad Mode</a></li>
												<li><a href="news.php#TDM_Arena_Mode"><i class="fa fa-angle-right" aria-hidden="true"></i>TDM Arena Mode</a></li>
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="news.php#Pubg_Mobile_News"><i class="fa fa-angle-right" aria-hidden="true"></i>Pubg Mobile News</a></li>
												<li><a href="news.php#Pubg_Mobile_Lite"><i class="fa fa-angle-right" aria-hidden="true"></i>Pubg Mobile Lite</a></li>
												<li><a href="news.php#New_Erangle_Map"><i class="fa fa-angle-right" aria-hidden="true"></i>New Erangle Map 2.0</a></li>
												<li><a href="news.php#New_Map_Upadate"><i class="fa fa-angle-right" aria-hidden="true"></i>New Map Upadate</a></li>
												<li><a href="news.php#Emulator_Upadate"><i class="fa fa-angle-right" aria-hidden="true"></i>Emulator Upadate</a></li>
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="news.php#Pubg_PC_News"><i class="fa fa-angle-right" aria-hidden="true"></i>Pubg PC News</a></li>
												<li><a href="news.php#Instant_news"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant news</a></li>
												<li><a href="news.php#History_of_PUBG"><i class="fa fa-angle-right" aria-hidden="true"></i>History of PUBG</a></li>
												<li><a href="news.php#New_Dyanamic_wheather"><i class="fa fa-angle-right" aria-hidden="true"></i>New Dyanamic wheather</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="news.php"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Tournaments<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="tournaments.php#PMCO"><i class="fa fa-angle-right" aria-hidden="true"></i>PMCO</a></li>
												<li><a href="tournaments.php#PMIT"><i class="fa fa-angle-right" aria-hidden="true"></i>PMIT</a></li>
												<li><a href="tournaments.php#PMIS"><i class="fa fa-angle-right" aria-hidden="true"></i>PMIS</a></li>
												<li><a href="tournaments.php#PMCC"><i class="fa fa-angle-right" aria-hidden="true"></i>PMCC</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="tournaments.php#PMPL"> <i class="fa fa-angle-right" aria-hidden="true"></i>PMPL</a></li>
												<li><a href="tournaments.php#PMAS"><i class="fa fa-angle-right" aria-hidden="true"></i>PMAS</a></li>
												<li><a href="tournaments.php#ASPL"><i class="fa fa-angle-right" aria-hidden="true"></i>ASPL</a></li>
												<li><a href="tournaments.php#PGS"><i class="fa fa-angle-right" aria-hidden="true"></i>PGS</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="tournaments.php"><i class="fa fa-angle-right" aria-hidden="true"></i>8</a></li>
												<li><a href="tournaments.php"><i class="fa fa-angle-right" aria-hidden="true"></i>9</a></li>
												<li><a href="tournaments.php"><i class="fa fa-angle-right" aria-hidden="true"></i>10</a></li>
												<li><a href="tournaments.php"><i class="fa fa-angle-right" aria-hidden="true"></i>11</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="tournaments.php"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							
							<li class="dropdown ">
							
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Weapons<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Assault_Rifles"><i class="fa fa-angle-right" aria-hidden="true"></i>Assault Rifles</a></li>
												
												<li><a href="weapons.php#Sniper_Rifles"><i class="fa fa-angle-right" aria-hidden="true"></i>Sniper Rifles</a></li>
																				
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Light_Machine_Guns"> <i class="fa fa-angle-right" aria-hidden="true"></i>Light Machine Guns</a></li>
												<li><a href="weapons.php#Pistols"><i class="fa fa-angle-right" aria-hidden="true"></i>Pistols</a></li>
												<li><a href="weapons.php#Crossbows"><i class="fa fa-angle-right" aria-hidden="true"></i>Crossbows</a></li>												
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Sub_Machine_Guns"><i class="fa fa-angle-right" aria-hidden="true"></i>Sub Machine Guns</a></li>
												<li><a href="weapons.php#Shotguns"><i class="fa fa-angle-right" aria-hidden="true"></i>Shotguns</a></li>		
												
																				
											</ul>
											
										</div>
										<div class="col-sm-3 w3l">
											<a href="tournaments.php"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="contact.php" class="hyper"><span>Contact-Us</span></a></li>
						</ul>
					</div>
					</nav>
					<a href="showaddtocart.php"> 
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
				</a>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->
<div data-vide-bg="video/video" class="b">
    <div class="container">
		<div class="banner-info" >
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>	
			<!--<div class="search-form">
				<form action="#" method="post">
					<input type="text" placeholder="Search..." name="Search...">
					<input type="submit" value=" " >
				</form>
			</div>	-->	
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>All Available Products</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
					  <li class=""><a href="#tab1" data-toggle="tab">T-Shirt</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Bags</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Mobile Cover</a></li>
					  <li class=""><a href="#tab4" data-toggle="tab">Key-Chain</a></li>
					</ul>
				</nav>
				
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<?php 
								
								$con = mysqli_connect('localhost','root','','demodatabase');
								$sq="SELECT  * FROM product WHERE cat_id=1";
								$res = mysqli_query($con,$sq);	
							
								while($row=mysqli_fetch_array($res))
								{		

										$p_id=$row['p_id'];
										$p_name=$row['p_name'];
										$p_image=$row['p_image'];
										$p_quantity=$row['p_quantity'];
										$p_price=$row['p_price'];
							?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="singletshirt.php?p_id=<?php echo $p_id; ?>" >
										<img src="images/<?php echo $p_image; ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="singletshirt.php?p_id=<?php echo $p_id; ?>"><?php echo $p_name; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label></label><em class="item_price"><big><font color="red"> &#8377; <?php echo $p_price; ?></font></big></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<?php
												if(@$_SESSION['c_email'])
												{
														echo "<form method='get' action='addtocart.php'>
																	<button type ='submit' class='btn btn-danger my-cart-btn my-cart-b' 
																	    data-p_id='$p_id' 
																	    data-p_name='$p_name' 
																	    data-summary='summary 1' 
																	    data-p_price='$p_price' 
																	    data-p_quantity='1' 
																	    data-p_image='images/$p_image' 
																	    name='addtocartclick'
																	    type='submit'
																	    onclick='return addTocart()'>
																	    Add to Cart
																	</button>
																	<input type='hidden' value='$p_id' name=p_id>
																	<input type='hidden' value='$p_price' name=p_price>
																</form>";	
												}
												else 
												{
													echo "<a href='login.php'>
															<button class='btn btn-danger my-cart-btn my-cart-b' >Add to Cart</button>
														  </a>";
												}
											?> 
											
										</div>
									</div>
								</div>
							</div>
							<?php }?>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php 
								
								$con = mysqli_connect('localhost','root','','demodatabase');
								
								$res = mysqli_query($con,"SELECT * FROM product WHERE cat_id=2");	
							
								while($row=mysqli_fetch_array($res))
								{		
										$p_id=$row['p_id'];
										$p_name=$row['p_name'];
										$p_size=$row['p_size'];
										$p_color=$row['p_color'];
										$p_description=$row['p_description'];
										$cat_id=$row['cat_id'];
										$p_weight=$row['p_weight'];
										$p_image=$row['p_image'];
										$p_quantity=$row['p_quantity'];
										$p_price=$row['p_price'];
							?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="singlebag.php?p_id=<?php echo $p_id; ?>" >
										<img src="images/<?php echo $p_image; ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="singlebag.php?p_id=<?php echo $p_id; ?>"><?php echo $p_name; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label></label><em class="item_price"><big><font color="red">&#8377; <?php echo $p_price; ?></font></big></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <?php
												if(@$_SESSION['c_email'])
												{
														echo "<form method='get' action='addtocart.php'>
																	<button type ='submit' class='btn btn-danger my-cart-btn my-cart-b' 
																	    data-p_id='$p_id' 
																	    data-p_name='$p_name' 
																	    data-summary='summary 1' 
																	    data-p_price='$p_price' 
																	    data-p_quantity='1' 
																	    data-p_image='images/$p_image' 
																	    name='addtocartclick'
																	    type='submit'
																	   >
																	    Add to Cart
																	</button>
																	<input type='hidden' value='$p_id' name=p_id>
																	<input type='hidden' value='$p_price' name=p_price>
																</form>";	
												}
												else 
												{
													echo "<a href='login.php'>
															<button class='btn btn-danger my-cart-btn my-cart-b' >Add to Cart</button>
														  </a>";
												}
											?> 
										
											
										</div>
									</div>
								</div>
							</div>
							<?php }?>
							
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<?php 
								
								$con = mysqli_connect('localhost','root','','demodatabase');
								
								$res = mysqli_query($con,"SELECT * FROM product WHERE cat_id=3");	
							
								while($row=mysqli_fetch_array($res))
								{		
										$p_id=$row['p_id'];
										$p_name=$row['p_name'];
										$p_size=$row['p_size'];
										$p_color=$row['p_color'];
										$p_description=$row['p_description'];
										$cat_id=$row['cat_id'];
										$p_weight=$row['p_weight'];
										$p_image=$row['p_image'];
										$p_quantity=$row['p_quantity'];
										$p_price=$row['p_price'];
							?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="singlemobilecover.php?p_id=<?php echo $p_id; ?>" >
										<img src="images/<?php echo $p_image; ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="singlemobilecover.php?p_id=<?php echo $p_id; ?>"><?php echo $p_name; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label></label><em class="item_price"><big><font color="red"><?php echo $p_price; ?></font></big></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   	<?php
												if(@$_SESSION['c_email'])
												{
														echo "<form method='get' action='addtocart.php'>
																	<button type ='submit' class='btn btn-danger my-cart-btn my-cart-b' 
																	    data-p_id='$p_id' 
																	    data-p_name='$p_name' 
																	    data-summary='summary 1' 
																	    data-p_price='$p_price' 
																	    data-p_quantity='1' 
																	    data-p_image='images/$p_image' 
																	    name='addtocartclick'
																	    type='submit'
																	   >
																	    Add to Cart
																	</button>
																	<input type='hidden' value='$p_id' name=p_id>
																	<input type='hidden' value='$p_price' name=p_price>
																</form>";	
												}
												else 
												{
													echo "<a href='login.php'>
															<button class='btn btn-danger my-cart-btn my-cart-b' >Add to Cart</button>
														  </a>";
												}
											?> 
											
										</div>
									</div>
								</div>
							</div>
							<?php }?>
							
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane  text-style" id="tab4">
						<div class=" con-w3l">
							<?php 
								
								$con = mysqli_connect('localhost','root','','demodatabase');
								
								$res = mysqli_query($con,"SELECT * FROM product WHERE cat_id=4");	
							
								while($row=mysqli_fetch_array($res))
								{		
										$p_id=$row['p_id'];
										$p_name=$row['p_name'];
										$p_size=$row['p_size'];
										$p_color=$row['p_color'];
										$p_description=$row['p_description'];
										$cat_id=$row['cat_id'];
										$p_weight=$row['p_weight'];
										$p_image=$row['p_image'];
										$p_quantity=$row['p_quantity'];
										$p_price=$row['p_price'];
							?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="singlekeychain.php?p_id=<?php echo $p_id; ?>" >
										<img src="images/<?php echo $p_image; ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="singlekeychain.php?p_id=<?php echo $p_id; ?>"><?php echo $p_name; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label></label><em class="item_price"><big><font color="red"><?php echo $p_price; ?></font></big></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   	<?php
												if(@$_SESSION['c_email'])
												{
														echo "<form method='get' action='addtocart.php'>
																	<button type ='submit' class='btn btn-danger my-cart-btn my-cart-b' 
																	    data-p_id='$p_id' 
																	    data-p_name='$p_name' 
																	    data-summary='summary 1' 
																	    data-p_price='$p_price' 
																	    data-p_quantity='1' 
																	    data-p_image='images/$p_image' 
																	    name='addtocartclick'
																	    type='submit'
																	    onclick='return addTocart()'>
																	    Add to Cart
																	</button>
																	<input type='hidden' value='$p_id' name=p_id>
																	<input type='hidden' value='$p_price' name=p_price>
																</form>";	
												}
												else 
												{
													echo "<a href='login.php'>
															<button class='btn btn-danger my-cart-btn my-cart-b' >Add to Cart</button>
														  </a>";
												}
											?> 
											
										</div>
									</div>
								</div>
							</div>
							<?php }?>
							
							<div class="clearfix"></div>
						 </div>		  
					</div>
					</div>
				</div>
			
			</div>
		
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="news.php">
					<img src="images/co1.jpg" class="img-responsive img" alt="">
					<div class="big-sa">
						<h6></h6>
						<h3><span></span></h3>
						<p></p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="hold.html">
					<img src="images/co.jpg" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Vehicle</h3>
							<h2><p font = >Information</p></h2>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="news.php">
					<img src="images/co2.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3><span></span></h3>
						<p></p>		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="hold.html">
					<img src="images/co3.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3><span></span></h3>
						<p></p>
					</div>
				</a>
			</div>
			<br>
			<div class="col-md3 ">
				<a href="hold.html">
					<img src="images/co4.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3><span></span></h3>
						<p></p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="news.php"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="tournaments.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->


<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Nam libero tempore, cum soluta nobis est eligendi 
				optio cumque nihil impedit quo minus id quod maxime 
				placeat facere possimus.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="tournaments.php">Tournaments</a></li>
				<li><a href="merchandise.php">Merchandise</a></li>						 
				<li><a href="weapons.php">Information</a></li> 
				<li><a href="contact.php">Contact-Us</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<!--<li><a href="shipping.html">Shipping</a></li> -->
				<li><a href="terms.php">Terms & Conditions</a></li>
				<li><a href="faqs.php">FAQs</a></li>
				<li><a href="contact.php">Contact-Us</a></li>
				<li><a href="offer.php">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<!--<li><a href="wishlist.html">Wishlist</a></li> -->
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php"><b>T<br>H<br>E</b>&nbsp;PUBG STORE<span>Best One Stop Solution</span></a></h2>
				<p class="fo-para">Failure Doesnt Mean The Game Over, It Means Try Again With Experience.</p>
				<ul class="social-fo">
					<li><a href="https://www.facebook.com" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://in.pinterest.com" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="https://dribbble.com" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Atmiya College,Rajkot,Gujarat,India</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+91 96621-08047 , +91 7016145256</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="ronakkordiya1150@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>ronakkordiya1150@gmail.com</a></p>
						<p><a href="darjih848@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>darjih848@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2019 Online Pubg store. All Rights Reserved | Design by Ronak Koradiya,Harsh Darji</p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
  
 
</body>
</html
