<?php session_start(); ?>
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
							<li><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
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
							<li class="dropdown">
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Merchandise<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="merchandise.php?cat_id=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Man T-Shirt</a></li>
												<li><a href="merchandise.php?p_id=4"><i class="fa fa-angle-right" aria-hidden="true"></i>Mobile Cover</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="merchandise.php?cat_id=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Bag</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="merchandise.php?cat_id=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Key-Chain</a></li>
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="merchandise.php"><img src="images/me2.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li class="dropdown">
							
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Weapons<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Assault_Rifles"><i class="fa fa-angle-right" aria-hidden="true"></i>Assault Rifles</a></li>
												
												<li><a href="weapons.php#Sniper_Rifles""><i class="fa fa-angle-right" aria-hidden="true"></i>Sniper Rifles</a></li>
																				
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Light_Machine_Guns""> <i class="fa fa-angle-right" aria-hidden="true"></i>Light Machine Guns</a></li>
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
							</li></a></li>
							<li><a href="contact.php" class="hyper"><span>Contact-Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--Register-->
	<?php 
		if(isset($_POST['register']))
		{
			$c_name=$_POST['c_name'];
			$c_email=$_POST['c_email'];
			$c_password=$_POST['c_password'];
			$c_conformpassword=$_POST['c_conformpassword'];
			$c_contact=$_POST['c_contact'];
			$c_address=$_POST['c_address'];
			@$c_gender=$_POST['c_gender'];

			$con = mysqli_connect('localhost','root','','demodatabase');
			$sq="SELECT * from customer WHERE c_email = '$c_email' AND c_name = '$c_name'";

			$result=mysqli_query($con,$sq);

			$num=mysqli_num_rows($result);
			/////////User Validation
			if($c_name == "")
			{
				$error_msg['c_name']= "*Username Required";	
			}
			else if(!preg_match("/^[a-zA-Z]*$/", $c_name))
			{
				$error_msg['c_name'] = "*Only letters allowed in USERNAME";
			}
			else if(strlen($c_name) > 15)
			{
				$error_msg['c_name']= "*Username is too long, maximum is 15 characters.";
			}
			else
			{
				$error_msg['c_name']= "";
			}
			/////////Email Validation
			
			if($c_email == "")
			{
				$error_msg['c_email']= "*EmailAddress Required";
			}
			else if(filter_var($c_email,FILTER_VALIDATE_EMAIL))
			{
				$error_msg['c_email']= "*EmailAddress not in Valid formate";	
			}
			
			
			/////////Password Validation
			if($c_password == "")
			{
				$error_msg['c_password']= "*Password Required";
			}
			else if(!preg_match("/^.*(?=.*[0-9]).*$/",$c_password))
			{
				$error_msg['c_password']= "*Password must be one DIGIT";
			}
			else if(!preg_match("/^.*(?=.*[A-Z]).*$/",$c_password))
			{
				$error_msg['c_password']= "*Password must be one UPPEERCASE letter";
			}
			else if(!preg_match("/^.*(?=.*[a-z]).*$/",$c_password))
			{
				$error_msg['c_password']= "*Password must be  one LOWERCASE letter";
			}
			else
			{
				$error_msg['c_password']= "";
			}
			/////////ConformPassword Validation
			if($c_conformpassword == "")
			{
				$error_msg['c_conformpassword']= "*ConformPassword Required";
			}
			else if($c_password != $c_conformpassword)
			{
				$error_msg['c_conformpassword']= "*ConformPassword are not Matched ";
			}
			else
			{
				$error_msg['c_conformpassword']= "";
			}
			/////////Contact Validation
			if($c_contact == "")
			{
				$error_msg['c_contact']= "*Contact Required";
			}
			else if(!preg_match("/^[0-9]{10}+$/",$c_contact))
			{
				$error_msg['c_contact']= "*Contact must be 10 DIGIT";
			}
			else
			{
				$error_msg['c_contact']= "";
			}
			/////////Gender Validation
			if(empty($c_gender))
			{
				$error_msg['c_gender']= "*Select Gender";
			}
			else
			{
				$error_msg['c_gender']= "";
			}
			/////////Addresss Validation
			if($c_address == "")
			{
				$error_msg['c_address']= "*Address Required";
			}
			else if($num == 1)
			{
				echo "<script>alert('Email Already registed')</script>'";
			}
			else
			{
				$iq = "INSERT INTO customer(c_name,c_contact,c_email,c_password,c_gender,c_address) VALUES ('$c_name','$c_contact','$c_email','$c_password','$c_gender','$c_address')";
				if(mysqli_query($con,$iq))
				{ 
					echo "<script>alert('Register Successfull')</script>'";
					echo "<script> location.replace('login.php') </script>";
				}
				else
				{
					echo '<script>alert("Register Not Valid")</script>';		
				}
			}			
		}
	?>
	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>User Register</h3>
					<form action="#" method="post" onsubmit="return validation()">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true">&nbsp;<span>User Name</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_name']))
										{
											echo $error_msg['c_name'];
										}
									?>
								</span>
							</i>
							<input  type="text" name="c_name" class="form-control"  placeholder="Enter your Name" aria-describedby="basic-addon1">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true">&nbsp;<span>Email Address</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_email']))
										{
											echo $error_msg['c_email'];
										}
									?>
								</span>
							</i>
							<input  type="text"   name="c_email" autocomplete="off" class="form-control"  placeholder="Enter your Emailaddress" aria-describedby="basic-addon2">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true">&nbsp;<span>Password</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_password']))
										{
											echo $error_msg['c_password'];
										}
									?>
								</span>
							</i>
							<input  type="password"   name="c_password" autocomplete="off" class="form-control"  placeholder="Enter your Password" aria-describedby="basic-addon3" >
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true">&nbsp;<span>Confirm Password</span>
								<span class="text-danger font-weight-bold">
									<?php 
											if(isset($error_msg['c_conformpassword']))
											{
												echo $error_msg['c_conformpassword'];
											}
									?>
								</span>
							</i>
							<input  type="password"  name="c_conformpassword" autocomplete="off" class="form-control"  placeholder="Re-Enter your Password" aria-describedby="basic-addon4">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true">&nbsp;<span>Contact Number</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_contact']))
										{
											echo $error_msg['c_contact'];
										}
									?>
								</span>
							</i>
							<input  type="text"  name="c_contact" autocomplete="off" class="form-control"  placeholder="Enter your Contact" aria-describedby="basic-addon5">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-transgender" aria-hidden="true">&nbsp;<span>Gender</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_gender']))
										{
											echo $error_msg['c_gender'];
										}
									?>
								</span>
							</i>
							<br>
							<br>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<label align=center class=""><font color=green size="4px">Gender</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;
								<input type="radio"  name="c_gender" value="male">Male&nbsp;&nbsp;&nbsp;
								<input type="radio" name="c_gender" value="female">Female&nbsp;&nbsp;&nbsp;
								<input type="radio" name="c_gender" value="Other">Other&nbsp;&nbsp;&nbsp;
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-globe" aria-hidden="true">&nbsp;<span>Address</span>
								<span class="text-danger font-weight-bold">
									<?php 
										if(isset($error_msg['c_address']))
										{
											echo $error_msg['c_address'];
										}
									?>
								</span>
							</i>
							<textarea  rows="5" name="c_address" class="form-control"  placeholder="Enter your Place Address.................." aria-describedby="basic-addon6"></textarea>
							<div class="clearfix"></div>
						</div>
						<button type="submit"  name="register"  class="btn btn-success btn-lg">Register</button>
					</form>
				</div>
				
			</div>
		</div>
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
</html>