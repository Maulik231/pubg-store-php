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
							
							
							<li class="dropdown active">
							
								<a href="" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Weapons<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="weapons.php#Assault_Rifles"><i class="fa fa-angle-right" aria-hidden="true"></i>Assault Rifles</a></li>
												<li><a href="weapons.php#Designated_Marksman_Rifle"><i class="fa fa-angle-right" aria-hidden="true"></i>Designated Marksman Rifle</a></li>
												<li><a href="weapons.php#Sniper_Rifles"><i class="fa fa-angle-right" aria-hidden="true"></i>Sniper Rifles</a></li>
																				
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
							</li>
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
		<h3 >Weapons</h3>
		<h4><a href="index.html">Home</a><label>/</label>weapons</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- Weapons -->
<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Assault_Rifles">Assault Rifles</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/m416.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>M416 DESCRIPTION</h5>
						<p>The Heckler & Koch HK416 ( AKA M416 ) is an assault rifle/carbine designed and manufactured by Heckler & Koch. Although its design is in large parts based on the AR-15 class of weapons, specifically the Colt M4 carbine family issued to the U.S. military, it uses an HK-proprietary short-stroke gas piston system originally derived from the ArmaLite AR-18 (the same system was also used in Heckler & Koch’s earlier G36 family of rifles). The HK416 gained fame as the gun that United States Navy SEALs used to kill Osama Bin Laden in 2011</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/SCAR-L.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>SCAR-L DESCRIPTION</h5>
						<p>The FN SCAR (Special Operations Forces Combat Assault Rifle) is a gas-operated (short-stroke gas piston) self-loading rifle with a rotating bolt. It is constructed to be extremely modular, including barrel change to switch between calibers. The rifle was developed by FN Herstal (FNH) for the United States Special Operations Command (SOCOM) to satisfy the requirements of the SCAR competition.[11] This family of rifles consist of two main types. The SCAR-L, for “light”, is chambered in 5.56×45mm NATO cartridge and the SCAR-H, for “heavy”, is chambered in 7.62×51mm NATO. Both are available in Close Quarters Combat (CQC), Standard (STD) and Long Barrel (LB) variants.</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>AR</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/M16A4.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>M16A4 DESCRIPTION</h5>
						<p>The M16 rifle, officially designated Rifle, Caliber 5.56 mm, M16, is a United States military adaptation of the Armalite AR-15 rifle.The original M16 was a select-fire, 5.56×45mm rifle with a 20-round magazine.

In 1964, the M16 entered American military service and the following year was deployed for jungle warfare operations during the Vietnam War. In 1969, the M16A1 replaced the M14 rifle to become the U.S. military’s standard service rifle. The M16A1 improvements include a bolt-assist, chrome plated bore and a new 30-round magazine. In 1983, the U.S. Marine Corps adopted the M16A2 rifle and the U.S. Army adopted it in 1986. The M16A2 fires the improved 5.56×45mm NATO (M855/SS109) cartridge and has a new adjustable rear sight, case deflector, heavy barrel, improved handguard, pistol grip and buttstock, as well as a semi-auto and three-round burst only fire selector. Adopted in 1998, the M16A4 is the fourth generation of the M16 series. It is equipped with a removable carrying handle and Picatinny rail for mounting optics and other ancillary devices.

The M16 has also been widely adopted by other militaries around the world. Total worldwide production of M16s has been approximately 8 million, making it the most-produced firearm of its 5.56 mm caliber. The U.S. Army has largely replaced the M16 in combat units with the shorter and lighter M4 carbine, and the U.S. Marine Corps approved a similar change in October 2015.</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Low</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/AKM.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>AKM DESCRIPTION</h5>
						<p>The AKM is a 7.62mm assault rifle designed by Mikhail Kalashnikov. It is a common modernized variant of the AK-47 rifle developed in the 1940s.

Introduced into service with the Soviet Army in 1959, the AKM is the most ubiquitous variant of the entire AK series of firearms and it has found widespread use with most member states of the former Warsaw Pact and its African and Asian allies as well as being widely exported and produced in many other countries. The production of these Soviet rifles was carried out at both the Tula Arms Plant and Izhmash. It was officially replaced in Soviet frontline service by the AK-74 in the late 1970s, but remains in use worldwide.	</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 7.62mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Mid</li></p><br><br><br><br><br><br><br>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>AR</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/GROZA.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>GROZA DESCRIPTION</h5>
						<p>The OTs-14 Groza (ОЦ-14 “Гроза”) is a Russian selective fire bullpup assault rifle chambered for the 7.62×39 round and the 9×39mm subsonic round. It was developed in the 1990s at the TsKIB SOO (Central Design and Research Bureau of Sporting and Hunting Arms) in Tula, Russia. The weapon is colloquially known as OC-14 or OTs-14 “Groza” (“Thunderstorm”). The OTs-14-4A “Groza-4” has one derivative, the TKB-0239 (ТКБ-0239), also known as OTs-14-1A “Groza-1”, chambered for the 7.62×39mm round.</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 7.62mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: High</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Mid</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/AUG.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>AUG DESCRIPTION</h5>
						<p>The FN AUG (Special Operations Forces Combat Assault Rifle) is a gas-operated (short-stroke gas piston) self-loading rifle with a rotating bolt. It is constructed to be extremely modular, including barrel change to switch between calibers. The rifle was developed by FN Herstal (FNH) for the United States Special Operations Command (SOCOM) to satisfy the requirements of the SCAR competition.[11] This family of rifles consist of two main types. The SCAR-L, for “light”, is chambered in 5.56×45mm NATO cartridge and the SCAR-H, for “heavy”, is chambered in 7.62×51mm NATO. Both are available in Close Quarters Combat (CQC), Standard (STD) and Long Barrel (LB) variants.</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>AR</span>
			</div>
		</div>
	</div>
	<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Light_Machine_Guns">Light Machine Guns</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/M249.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>M249 DESCRIPTION</h5>
						<p>The M249 light machine gun (LMG), formerly designated the M249 Squad Automatic Weapon (SAW) and formally written as Light Machine Gun, 5.56 mm, M249, is the American adaptation of the Belgian FN Minimi, a light machine gun manufactured by the Belgian company FN Herstal (FN). The M249 is manufactured in the United States by the local subsidiary FN Manufacturing LLC in South Carolina and is widely used in the U.S. Armed Forces. The weapon was introduced in 1984 after being judged the most effective of a number of candidate weapons to address the lack of automatic firepower in small units. The M249 provides infantry squads with the high rate of fire of a machine gun combined with accuracy and portability approaching that of a rifle.</p>
						<p>
						<li>Type: Light Machine Gun (LMG)</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: High</li>
						<li>Stability: Mid</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/SCAR-L.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>SCAR-L DESCRIPTION</h5>
						<p>The FN SCAR (Special Operations Forces Combat Assault Rifle) is a gas-operated (short-stroke gas piston) self-loading rifle with a rotating bolt. It is constructed to be extremely modular, including barrel change to switch between calibers. The rifle was developed by FN Herstal (FNH) for the United States Special Operations Command (SOCOM) to satisfy the requirements of the SCAR competition.[11] This family of rifles consist of two main types. The SCAR-L, for “light”, is chambered in 5.56×45mm NATO cartridge and the SCAR-H, for “heavy”, is chambered in 7.62×51mm NATO. Both are available in Close Quarters Combat (CQC), Standard (STD) and Long Barrel (LB) variants.</p>
						<p>
						<li>Type: Assault Rifle</li>
						<li>Ammo: 5.56mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>LMG</span>
			</div>
		</div>
	</div>
<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Sub_Machine_Guns">Sub Machine Guns</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/VECTOR.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>VECTOR DESCRIPTION</h5>
						<p>The KRISS Vector series are a family of weapons based upon the parent submachine gun design developed by KRISS USA, formerly Transformational Defense Industries (TDI). They use an unconventional delayed blowback system combined with in-line design to reduce perceived recoil and muzzle climb.</p>
						<p>
						<li>Type: Submachine Gun</li>
						<li>Ammo: 45 ACP, 13 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Low</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/UMP9.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>UMP9 DESCRIPTION</h5>
						<p>The UMP (Universale Maschinenpistole, German for “Universal Submachine Gun”) is a submachine gun developed and manufactured by Heckler & Koch. The UMP has been adopted by various agencies such as the U.S. Customs and Border Protection. Heckler & Koch developed the UMP as a lighter and cheaper successor to the MP5, though both remain in production.</p>
						<p>
						<li>Type: Submachine Gun</li>
						<li>Ammo: 9mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>SMG</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/TOMMY GUN.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>TOMMY GUN DESCRIPTION</h5>
						<p>The Thompson submachine gun is an American submachine gun, invented by John T. Thompson in 1918, that became infamous during the Prohibition era. It was a common sight in the media of the time, being used by both law enforcement officers and criminals. The Thompson submachine gun was also known informally as the “Tommy Gun“, “Annihilator“, “Chicago Typewriter“, “Chicago Piano“, “Chicago Style“, “Chicago Organ Grinder“, “Trench Broom“, “Trench Sweeper“, “The Chopper“, and simply “The Thompson“.</p>

<p>The Thompson was favored by soldiers, criminals, police, and civilians alike for its large .45 ACP cartridge, accuracy, and high volume of automatic fire. It has since gained popularity among civilian collectors for its historical significance. It has had, and continues to have, considerable significance in popular culture, especially in works about the U.S.’s Prohibition era and World War II, and hence is among the best-known firearms in recent history. Although the original fully automatic Thompsons are no longer produced, numerous semi-automatic civilian versions are still being manufactured by Auto Ordnance. These retain a similar appearance to the original models, but they have various modifications in order to comply with US firearm laws.</p>
						<p>
						<li>Type: Submachine Gun</li>
						<li>Ammo: 9mm, 30 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/MICRO UZI.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>MICRO UZI DESCRIPTION</h5>
						<p>The Uzi (Hebrew: עוזי‎‎, officially cased as UZI) is a family of Israeli open-bolt, blowback-operated submachine guns. Smaller variants are considered to be machine pistols. The Uzi was one of the first weapons to use a telescoping bolt design which allows the magazine to be housed in the pistol grip for a shorter weapon.</p>

<p>The first Uzi submachine gun was designed by Major Uziel Gal in the late 1940s. The prototype was finished in 1950. First introduced to IDF special forces in 1954, the weapon was placed into general issue two years later. The Uzi has found use as a personal defense weapon by rear-echelon troops, officers, artillery troops and tankers, as well as a frontline weapon by elite light infantry assault forces.</p>
						<p>
						<li>Type: Submachine Gun</li>
						<li>Ammo: 9mm, 25 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: High</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>SMG</span>
			</div>
		</div>
	</div>

	<div class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Sniper_Rifles">Sniper Rifles</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/AWM.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>AWM DESCRIPTION</h5>
						<p>The Accuracy International AWM (Arctic Warfare Magnum) is a bolt-action sniper rifle manufactured by Accuracy International designed for magnum rifle cartridge chamberings.</p>
						<p>
						<li>Type: Sniper Rifle</li>
						<li>Ammo: .300 Magnum, 5 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power:  Very High</li>
						<li>Effective Range: Very High</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/Kar98k.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>Kar98k DESCRIPTION</h5>
						<p>The Karabiner 98 kurz ([kaʀaˈbiːnɐ ˈaχtʊntnɔɪ̯ntsɪç kʊʁʦ]; “carbine 98 short”, often abbreviated Kar98k or K98k) is a bolt-action rifle chambered for the 7.92×57mm Mauser cartridge that was adopted on 21 June 1935 as the standard service rifle by the German Wehrmacht. It was one of the final developments in the long line of Mauser military rifles. Although supplemented by semi- and fully automatic rifles during World War II, it remained the primary German service rifle until the end of the war in 1945. Millions were captured by the Soviets at the conclusion of World War II and were widely distributed as military aid. The Karabiner 98k therefore continues to appear in conflicts across the world as they are taken out of storage during times of strife.</p>
						<p>
						<li>Type: Sniper Rifle</li>
						<li>Ammo: 7.62mm, 5 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: High</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>SR</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/M24.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>M24 DESCRIPTION</h5>
						<p>The M24 Sniper Weapon System (SWS) is the military and police version of the Remington Model 700 rifle, M24 being the model name assigned by the United States Army after adoption as their standard sniper riflein 1988. The M24 is referred to as a “weapon system” because it consists of not only a rifle, but also a detachable telescopic sight and other accessories.</p>
						<p>The M24 SWS has the “long action” bolt version of the Remington 700 receiver but is chambered for the 7.62×51mm NATO “short action” cartridge that has an overall length of 2.750 inches (69.85 mm). The “long action” allows the rifle to be re-configured for dimensionally larger cartridges up to 3.340 inches (84.84 mm) in overall length.</p>
						<p>
						<li>Type: Sniper Rifle</li>
						<li>Ammo: 7.62mm, 5 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: High</li>
						<li>Effective Range: Very high</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very low</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/VSS.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>VSS DESCRIPTION</h5>
						<p>The VSS (Russian: Винтовка Снайперская Специальная, Vintovka Snayperskaya Spetsialnaya or “Special Sniper Rifle”, GRAU designation 6P29), also called the Vintorez (“thread cutter”), is a suppressed sniper rifle that uses a heavy subsonic 9×39mm SP5 cartridge and armor-piercing SP6 cartridge. It was developed in the late 1980s by TsNIITochMash and manufactured by the Tula Arsenal. It is issued primarily to Spetsnazunits for undercover or clandestine operations, a role made evident by its ability to be stripped down for transport in a specially fitted briefcase.</p>
						<p>
						<li>Type: Sniper Rifle</li>
						<li>Ammo: 9mm, 10 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: High</li>
						<li>Effective Range: Very high</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>SR</span>
			</div>
		</div>
	</div>
	<div class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Designated_Marksman_Rifle">Designated Marksman Rifle</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/SKS.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>SKS DESCRIPTION</h5>
						<p>The SKS is a Soviet semi-automatic carbine chambered for the 7.62×39mm round, designed in 1943 by Sergei Gavrilovich Simonov. Its complete designation, SKS-45, is an initialism for Samozaryadny Karabin sistemy Simonova, 1945 (Russian: Самозарядный карабин системы Симонова, 1945; Self-loading Carbine of (the) Simonov system, 1945). The SKS-45 was manufactured at Tula Arsenal from 1949-1958 and at Izhevsk Arsenal in just 1953 and 1954, resulting in a total Soviet production of about 2.7 million carbines. In the early 1950s, the Soviets took the SKS carbine out of front-line service and replaced it with the AK-47; however, the SKS remained in second-line service for decades. It is still used as a ceremonial firearm today. The SKS was widely exported, and was also licensed for production by then Eastern Bloc nations, Romania and East Germany, as well as China, where it was designated the “Type 56 Carbine”. The East German version was known as the Karabiner S, the Albanian as the Model 561 and North Korean as the “Type 63”. The SKS is popular on the civilian surplus market as a hunting and marksmanship semi-automatic rifle in many countries, including the United States, Canada, and New Zealand. Its age and numbers make it relatively inexpensive to purchase, and steel cased 7.62x39mm ammunition is one of the least expensive center fire cartridges currently on the market. The SKS was the second firearm to be chambered for the 7.62×39mm M43 round, with the first being the RPD.</p>

						
						<p>
						<li>Type: Semi-Automatic DMR Rifle</li>
						<li>Ammo: 7.62mm, 10 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Mid</li>
						<li>Firing Rate: Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/Mk14 EBR.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>Mk14 EBR DESCRIPTION</h5>
						<p>The Mk 14 Enhanced Battle Rifle (EBR) is an American selective fire military designated marksman rifle chambered for the 7.62×51mm NATO cartridge. It is a variant of the M14 battle rifle and was originally built for use with units of the United States Special Operations Command, such as the United States Navy SEALs, Delta Force, and task specific ODA units.</p>
						<p>These EBRs are made with the intention of carrying out both designated marksman and close combat roles in combat. Since 2010, the U.S. Army has made available two M14 EBR-RI rifles per infantry platoon for units deploying to Afghanistan. The M14 EBR-RI has a standard weight 22.0-inch (560 mm) barrel and lugged GI flash hider; it is not to be confused with the Mk 14 Mod 0 or Mod 1.</p>
					<p>
						<li>Type: Semi-Automatic DMR Rifle</li>
						<li>Ammo: 7.62mm, 10 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Mid</li>
						<li>Effective Range: Mid</li>
						<li>Stability: Mid</li>
						<li>Firing Rate: Low</li></p><br><br><br><br><br><br>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>DMR</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/SKS.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>mini DESCRIPTION</h5>
						<p>P92 AKA the Beretta 92 (also Beretta 96 and Beretta 98) is a series of semi-automatic pistols designed and manufactured by Beretta of Italy. The model 92 was designed in 1972 and production of many variants in different calibers continues today.</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: 9mm, 15 shots per clip</li>
						<li>Capacity: 100</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Mid</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/SKS.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>slr DESCRIPTION</h5>
						<p>R1895 AKA The Nagant M1895 Revolver was a seven-shot, gas-seal revolver designed and produced by Belgian industrialist Léon Nagant for the Russian Empire.</p>
						<p>The Nagant M1895 was chambered for a proprietary cartridge, 7.62×38mmR, and featured an unusual “gas-seal” system, in which the cylinder moved forward when the gun was cocked, to close the gap between the cylinder and the barrel, providing a boost to the muzzle velocity of the fired projectile and allowing the weapon to be suppressed (an unusual ability for a revolver)</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: 7.62mm, 7 shots per clip</li>
						<li>Capacity: 80</li>
						<li>Power: Mid</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>DMR</span>
			</div>
		</div>
	</div>	
	<div class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Shotguns">Shotguns</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/S12K.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>S12K DESCRIPTION</h5>
						<p>S12K A.K.A. The Saiga-12 is a 12-gauge shotgun available in a wide range of configurations, patterned after the Kalashnikov series of rifles and named for the Saiga antelope. Like the Kalashnikov rifle variants, it is a rotating bolt, gas-operated gun that feeds from a box magazine. All Saiga-12 configurations are recognizable as Kalashnikov-pattern guns by the large lever-safety on the right side of the receiver, the optic mounting rail on the left side of the receiver and the large top-mounted dust cover held in place by the rear of the recoil spring assembly.</p>
						<p>The Saiga-12 is manufactured by the arms division of Izhmash, in Russia. It was previously imported into the US by European American Armories, although their agreement expired in 2005 and Izhmash then began exporting through the Russian-American Armory Company. The current export import partner is Wolf Performance Arms.Izhmash also manufactures Saiga 20s and Saiga 410s in 20-gauge and .410 bore, as well as the Saiga semi-automatic hunting rifles in a number of centerfire calibers.</p>
						<p>
						<li>Type: Shotgun</li>
						<li>Ammo: 12 Gauge, 5 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Very High</li>
						<li>Effective Range: Very Low</li>
						<li>Stability: Very High</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/S1897.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>S1897 DESCRIPTION</h5>
						<p>The Winchester Model 1897, also known as the Model 97, M97, or Trench Gun, was a pump-action shotgun with an external hammer and tube magazine manufactured by the Winchester Repeating Arms Company. The Model 1897 was an evolution of the Winchester Model 1893 designed by John Browning. From 1897 until 1957, over one million of these shotguns were produced. The Model 1897 was offered in numerous barrel lengths and grades, chambered in 12 and 16 gauge, and as a solid frame or takedown. The 16-gauge guns had a standard barrel length of 28 inches, while 12-gauge guns were furnished with 30-inch length barrels. Special length barrels could be ordered in lengths as short as 20 inches, and as long as 36 inches. Since the time the Model 1897 was first manufactured it has been used by American soldiers, police departments,and hunters</p>
						<p>
						<li>Type: Shotgun</li>
						<li>Ammo: 12 Gauge, 5 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Max</li>
						<li>Effective Range: Very Low</li>
						<li>Stability: High</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>SG</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/S686.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>S686 DESCRIPTION</h5>
						<p>The S686 is a sporting variant of the Beretta 686 “Silver Pigeon”, a sporting shotgun chambered to various gauges (though it primarily handles 12 gauge). The shotgun is a relatively common hunting gun, used primarily by American clay pigeon shooters. The shotgun is very powerful at close range because it shoots several small sized pellets against the target which causes great damage to tissue, but as the pellets travel further away, the area gets bigger where the shot will hit effectively rendering the shotgun not so lethal at long ranges.</p>
						<p>
						<li>Type: Shotgun</li>
						<li>Ammo: 12 Gauge, 2 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Max</li>
						<li>Effective Range: Very Low</li>
						<li>Stability: High</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w3 "> 
						<img src="images/S686.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>S686 DESCRIPTION</h5>
						<p>The S686 is a sporting variant of the Beretta 686 “Silver Pigeon”, a sporting shotgun chambered to various gauges (though it primarily handles 12 gauge). The shotgun is a relatively common hunting gun, used primarily by American clay pigeon shooters. The shotgun is very powerful at close range because it shoots several small sized pellets against the target which causes great damage to tissue, but as the pellets travel further away, the area gets bigger where the shot will hit effectively rendering the shotgun not so lethal at long ranges.</p>
						<p>
						<li>Type: Shotgun</li>
						<li>Ammo: 12 Gauge, 2 shots per clip</li>
						<li>Capacity: 500</li>
						<li>Power: Max</li>
						<li>Effective Range: Very Low</li>
						<li>Stability: High</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>

				<div class="clearfix"> </div>
				<span>SG</span>
			</div>
		</div>
	</div>
	<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Pistols">Pistols</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/P18C.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>P18C DESCRIPTION</h5>
						<p>The P18C AKA Glock pistol, sometimes referred to by the manufacturer as a Glock “Safe Action” pistol and colloquially as a Glock, is a series of polymer-framed, short recoil-operated, locked-breech semi-automatic pistolsdesigned and produced by Glock Ges.m.b.H., located in Deutsch-Wagram, Austria. It entered Austrian military and police service by 1982 after it was the top performer on an exhaustive series of reliability and safety tests.</p>

						<p>Despite initial resistance from the market to accept a perceived “plastic gun” due to unfounded durability and reliability concerns and fears that it might circumvent metal detectors in airports, Glock pistols have become the company’s most profitable line of products, commanding 65% of the market share of handguns for United States law enforcement agencies, as well as supplying numerous national armed forces, security agencies, and police forces in at least 48 countries. Glocks are also popular firearms among civilians for recreational and competition shooting, home and self-defense, and concealed carry or open carry.</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: 9mm, 17 shots per clip</li>
						<li>Capacity: 100</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Mid</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/P1911.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>P1911 DESCRIPTION</h5>
						<p>The M1911 is a single-action, semi-automatic, magazine-fed, recoil-operated pistol chambered for the .45 ACP cartridge.[1] It served as the standard-issue sidearm for the United States Armed Forces from 1911 to 1986. It was first used in later stages of the Philippine–American War, and was widely used in World War I, World War II, the Korean War, and the Vietnam War. The pistol’s formal designation as of 1940 was Automatic Pistol, Caliber .45, M1911 for the original model of 1911 or Automatic Pistol, Caliber .45, M1911A1 for the M1911A1, adopted in 1924. The designation changed to Pistol, Caliber .45, Automatic, M1911A1 in the Vietnam War era.</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: .45 ACP, 7 shots per clip</li>
						<li>Capacity: 100</li>
						<li>Power: Low</li>
						<li>Effective Range: Very Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>HG</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<img src="images/P92.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>P92 DESCRIPTION</h5>
						<p>P92 AKA the Beretta 92 (also Beretta 96 and Beretta 98) is a series of semi-automatic pistols designed and manufactured by Beretta of Italy. The model 92 was designed in 1972 and production of many variants in different calibers continues today.</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: 9mm, 15 shots per clip</li>
						<li>Capacity: 100</li>
						<li>Power: Low</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Mid</li></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<img src="images/R1895.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>R1895 DESCRIPTION</h5>
						<p>R1895 AKA The Nagant M1895 Revolver was a seven-shot, gas-seal revolver designed and produced by Belgian industrialist Léon Nagant for the Russian Empire.</p>
						<p>The Nagant M1895 was chambered for a proprietary cartridge, 7.62×38mmR, and featured an unusual “gas-seal” system, in which the cylinder moved forward when the gun was cocked, to close the gap between the cylinder and the barrel, providing a boost to the muzzle velocity of the fired projectile and allowing the weapon to be suppressed (an unusual ability for a revolver)</p>
						<p>
						<li>Type: Handgun</li>
						<li>Ammo: 7.62mm, 7 shots per clip</li>
						<li>Capacity: 80</li>
						<li>Power: Mid</li>
						<li>Effective Range: Low</li>
						<li>Stability: Low</li>
						<li>Firing Rate: Very Low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span>HG</span>
			</div>
		</div>
	</div>
	<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3 id="Crossbows">Crossbows</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class="work-w3">
						<img src="images/Crossbow.jpg" class="img-responsive" alt="" width="100%"><br>
						<h5>Crossbows DESCRIPTION</h5>
						<p>R1895 AKA The Nagant M1895 Revolver was a seven-shot, gas-seal revolver designed and produced by Belgian industrialist Léon Nagant for the Russian Empire.</p>
						<p>The Nagant M1895 was chambered for a proprietary cartridge, 7.62×38mmR, and featured an unusual “gas-seal” system, in which the cylinder moved forward when the gun was cocked, to close the gap between the cylinder and the barrel, providing a boost to the muzzle velocity of the fired projectile and allowing the weapon to be suppressed (an unusual ability for a revolver)</p>
						<p>
						<li>Type: Crossbow</li>
						<li>Ammo: Bolt, 1 shot per clip</li>
						<li>Capacity: 500</li>
						<li>Power: High</li>
						<li>Effective Range: Very low</li>
						<li>Stability: None</li>
						<li>Firing Rate: Very low</li></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //Weapons -->
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