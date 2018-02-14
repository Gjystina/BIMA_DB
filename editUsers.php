<?php
	session_start();
?>
<?php	
	$errorupload=false;
	$errorMessage="";
	$isAdmin = false;
	if(!isset($_SESSION['usrname'])){
		header('location:login.php');
		
		
		//$error = "You must log in first";
	}
	if($_SESSION['userlv'] == 0){
		$isAdmin = true;
		}else{
		$error1 = "Ju nuk keni te drejta ta hapni kete faqe!"; 
		
	}
	require_once "connection.php";
	
?>

<?php 
	//$conn = new PDO('mysql:host=localhost;dbname=bimasql1', 'bimasql1', 'Bima1718!');
	$db = mysqli_connect('localhost', 'bimasql1', 'Bima1718!', 'bimasql1');
	
	// initialize variables
	$id = 0;
	$update = false;
	
	if (isset($_GET['deactivate'])) {
		$id = $_GET['deactivate'];
		$update = true;
		$result=mysqli_query($db, "UPDATE user SET userlv=1 WHERE iduser=$id");
		$_SESSION['message'] = $usrname."Admin deactivated!";
		
	}
	if (isset($_GET['activate'])) {
		$id = $_GET['activate'];
		$update = true;
		$result=mysqli_query($db, "UPDATE user SET userlv=0 WHERE iduser=$id");
		$_SESSION['message'] = "Admin activated!";
	}
?>

<!--
	author: W3layouts
	author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BIMA | Perpuno recetat</title>
		<!-- custom-theme -->
		<link rel="stylesheet" type="text/css" href="probe/probe.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="BIMA Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- banner -->
		<div class="banner1">
			<div class="container">
				<div class="w3_agileits_banner_main_grid">
					<div class="w3_agile_logo">
						<h1><a href="index.php"><span>B</span>ima.al<i>Bota e bimeve</i></a></h1>
					</div>
					<div class="agile_social_icons_banner">
						
						<ul class="agileits_social_list">
							<li><a href="https://www.facebook.com/BimaTeam/" target = "__blank" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/bima__al/" target = "__blank" class="w3_agile_dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="editUsers.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
							
						</ul>
					</div>
					<div class="agileits_w3layouts_menu">
						<div class="shy-menu">
							<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
							</a>
							<div class="shy-menu-panel">
								<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
									<ul class="w3layouts_menu__list">
										<li><a href="index.php">BIMA</a></li>
										<li><a href="about.php">Rreth nesh</a></li> 
										<li><a href="bimet.php">Bimët</a></li>
										<li><a href="receta.php">Receta</a></li> 
										<li><a href="gallery.php">Galeria</a></li>
									</ul>
								</nav>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- banner -->
		<!-- bootstrap-pop-up -->
		<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						Bima
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
					<section>
						<div class="modal-body">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<p>Ut enim ad minima veniam, quis nostrum 
								exercitationem ullam corporis suscipit laboriosam, 
								nisi ut aliquid ex ea commodi consequatur? Quis autem 
								vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur, vel illum qui 
								dolorem eum fugiat quo voluptas nulla pariatur.
								<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- //bootstrap-pop-up -->
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="w3layouts_breadcrumbs_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i><a href="receta.php">User</a><span>/</span></li>
						<li><i class="fa fa-pencil" aria-hidden="true"></i>Perpuno nje user</li>
					</ul>
				</div>
				<div class="w3layouts_breadcrumbs_right">
					<ul>
						<li><h4><i class="fa fa-home" aria-hidden="true"></h4></i><b><a href="logout.php">Dilni</a></b></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //breadcrumbs -->
		<!-- about -->
		
		<div class="welcome">
			<div class="container">
				<h3 class="agileits_w3layouts_head">Perpuno <span>Userat</span> </h3>
				
				<div class="w3_agile_image">
					<img src="images/1.png" alt=" " class="img-responsive" />
				</div>
				<?php 
					
					if($isAdmin){
					?>
					<p class="agile_para">Miresevini Admin! Ndrysho rolin e nje perdoruesi!</p>
					<div class="w3ls_news_grids"> 			
					</div>			
					<?php }else{?>	
				</div>
				
			<?php }?>
		</div>
		
		<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
		<body>  
			<?php if($isAdmin){?>    
				<div class="container">
					
					<?php if (isset($_SESSION['message'])): ?>
					<div class="msg">
						<?php 
							echo $_SESSION['message']; 
							unset($_SESSION['message']);
						?>
					</div>
					<?php endif ?>
					
					<?php $results = mysqli_query($db, "SELECT  iduser, usrname, email, userlv FROM user;"); ?>
					<table class="table">
						<thead>
							<tr>
								<th>Emri</th>
								
								<th>E-Maili</th>
								<th>Statusi</th>
								<th colspan="2">Ndrysho Rolin</th>
							</tr>
						</thead>
						
						<?php while ($row = mysqli_fetch_array($results)) { ?>
							
							<tr>
								<td><?php echo $row['usrname']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php if($row['userlv']==0){ echo "<b><font color='#2E8B57'>Admin</font><b>"; }else if($row['userlv']==1){ echo "<b><font color='#800000'> User i thjeshte!</font><b>"; } ?></td>
								<td>
									<a href="editUsers.php?activate=<?php echo $row['iduser']; ?>" class="edit_btn" >Activate</a>
								</td>
								<td>
									<a href="editUsers.php?deactivate=<?php echo $row['iduser']; ?>" class="del_btn">Deactivate</a>
								</td>
							</tr>
						<?php } ?>
					</table>
					
					<?php
						
					}else {echo "<div class='alert alert-danger'>" . $error1 . "</div>";}?></br></br>
			</div>
		</div>
		
		<!-- //about -->
		<!-- skills -->
		<script src="js/skill.bars.jquery.js"></script>
		<script>
			$(document).ready(function(){
				
				$('.skillbar').skillBars({
					from: 0,
					speed: 4000, 
					interval: 100,
					decimals: 0,
				});
				
			});
		</script>
		<!-- //skills -->
		
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="w3agile_footer_grids">
					<div class="col-md-3 agileinfo_footer_grid">
						<div class="agileits_w3layouts_footer_logo">
							<h2><a href="index.php"><span>B</span>ima.al<i>Bota E Bimeve</i></a></h2>
						</div>
					</div>
					
					<div class="col-md-4 agileinfo_footer_grid">
						
						
						<h3>Kontaktet</h3>
						<h4>Na Telefononi <span>068 66 888 56</span></h4>
						<p>Shkoder, Albanien</p>
						<ul class="w3layouts_footer_nav">
						<li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
					</ul>
					<ul class="agileits_social_list">
							<li><a href="https://www.facebook.com/BimaTeam/" target = "__blank" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/bima__al/" target = "__blank" class="w3_agile_dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							
						</ul>
				</div>
				
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">	
				</div>
				
				<div class="col-md-3 agileinfo_footer_grid">
						<h3>Partnerët tanë </h3>
						
						<div class="agileinfo_footer_grid_left">
							<a href="https://yea.al" target="__blank" ><img src="images/yea.png" alt="" class = "img-responsive"/></a>
						</div>
					</div>
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_footer_copy">
				<div class="container">
					<p>© 2017-2018 BIMA.al</a></p>
				</div>
			</div>
		</div>
		<!-- //footer -->
		<!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
		<!-- //stats -->
		<!-- mislider -->
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 380,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>
		<!-- //mislider -->
		<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
				$('.test').textFx({
					type: 'fadeIn',
					iChar: 100,
					iAnim: 1000
				});
			});
		</script>
		<!-- //text-effect -->
		<!-- menu -->
		<script>
			$(function() {
				
				initDropDowns($("div.shy-menu"));
				
			});
			
			function initDropDowns(allMenus) {
				
				allMenus.children(".shy-menu-hamburger").on("click", function() {
					
					var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();
					
					if (thisMenu.hasClass("is-open")) {
						
						thisMenu.removeClass("is-open");
						
						} else {			
						
						allMenus.removeClass("is-open");	
						thisMenu.addClass("is-open");
						thisPanel.on("click", function(e) {
							e.stopPropagation();
						});
					}
					
					return false;
				});
			}
		</script>
		<!-- //menu -->
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
		<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
		<!-- here stars scrolling icon -->
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
		<!-- //here ends scrolling icon -->
	</div>
</body>
</html>

