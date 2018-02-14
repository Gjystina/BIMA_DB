<!--
	author: W3layouts
	author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	
	include_once("connection.php");
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BIMA | bimet</title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
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
						<h1><a href="index.php"><span>B</span>ima.al<i>Bota e Bimeve</i></a></h1>
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
										<li class="active"><a href="bimet.php">Bimet</a></li>
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
		
		<!-- breadcrumbs -->
		<div class="breadcrumbs" name="divbimet">
			<div class="container">
				<div class="w3layouts_breadcrumbs_left">
					<ul>
						<li><i class="fa fa-upload" aria-hidden="true"></i><a href="add_bima.php">Shto nje bime</a><span>/</span></li>
						<li><i class="fa fa-pencil" aria-hidden="true"></i><a href="edit_delete_bima.php">Perpuno bimet</a><span></span></li>
					</ul>
				</div>
				<div class="w3layouts_breadcrumbs_right">
					<h3>Bimet tona</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //breadcrumbs -->
		
		<!-- services-bottom -->
		<div class="services-bottom">
			<div class="container">
				<h3 class="agileits_w3layouts_head agileinfo_head w3_head"><span>Bimet</span> tona</h3>
				<div class="w3_agile_image">
					<img src="images/17.png" alt=" " class="img-responsive">
				</div>
				<p class="agile_para agileits_para">Njihuni me bimet e Shqiperise!</p>
				<div class="w3ls_news_grids">
					
					
					
					<div class="search">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									
									<form action="" method="post">
										
										<div class="row">
											<div class="col-lg-3">
												
												
											<span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span  class="dropdown-wrapper" style="width:300px" aria-hidden="true"></span></span>
											
											
											<tr>
												<td>
													&nbsp;
												</td>
												
												
												
												
												
												<table>
												</tr>
												<tr>
													<td>
														
													</td>
													<td>
														<input type="text" class="form-control" name="kerko" placeholder="Kerko..." style="width:1000px" >
														<td width="100px">
															
														<input type="submit" class= "btn btn-success" name="submitx" value="Go"/></input></td>
													</table>
												</form>
												<br>
												
												
											</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
						<?php
							
							
							$result = $conn->query("SELECT * FROM heilkraeuter WHERE shfaq=1");
							
							
							
							if (isset($_POST['submitx'])){
								
								$emri = $_POST['kerko'];
								$result = $conn->query("SELECT * FROM heilkraeuter WHERE AlName LIKE '%$emri%' OR BoName LIKE '%$emri%' OR ndikimi LIKE '%$emri%' OR aplikimi LIKE '%$emri%' OR beschreibung LIKE '%$emri%' OR shfaq LIKE '%$emri%'");
								} else {
								$result = $conn->query("SELECT * FROM heilkraeuter where shfaq=1");
							}
							
							
							
							while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
								
								$id = $row['id_h'];
								$emri = $row['AlName'];
								$boemri = $row['BoName'];
								$pershkrimi = $row['beschreibung'];
								$bima_foto = $row['bima_img'];
								$perdorimi = $row['HauptUse'];
								$ndikimi = $row['ndikimi'];
								$aplikimi = $row['aplikimi'];
								$sammelplatz = $row['sammelPlatz'];
								$sammelzeit = $row['sammelZeit'];
								
								echo  "<div class='col-md-4 w3_agileits_services_bottom_grid'>
								<div class='wthree_services_bottom_grid1'>
								<img src='$bima_foto' alt=' ' class='img-responsive' />
								<div class='wthree_services_bottom_grid1_pos'>
								<h4>$emri</h4>
								</div>
								</div>
								<div class='agileinfo_services_bottom_grid2'>
								<p>$boemri</p>
								<div class='agileits_w3layouts_learn_more hvr-radial-out'>
								<a href='#' data-toggle='modal' data-target='#$id'>Lexo me shume</a>
								</div>
								</div>
								</div>"						;
								/* bootstrap-pop-up */		
								
								echo "	<div class='modal video-modal fade' id='$id' tabindex='-1' role='dialog' aria-labelledby='myModal'>
								<div class='modal-dialog' role='document'>
								<div class='modal-content'>
								<div class='modal-header'>
								$emri
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span> </button>						
								</div>
								<section>
								<div class='modal-body'>
								<img src='$bima_foto' alt='' class='img-responsive' />
								<p style='color:black;'>$boemri <br/><br/>
								Pershkrimi:<br/>
								$pershkrimi<br/><br/>
								Perdorimi:<br/>
								$perdorimi <br/><br/>
								Ndikimi:<br/>
								$ndikimi <br/><br/>
								Aplikimi:<br/>
								$aplikimi<br/><br/>
								Vendi ku mblidhet:<br/>
								$sammelplatz<br/><br/>
								Koha kur mblidhet:<br/>
								$sammelzeit<br/><br/>
								
								
								</p>
								</div>
								</section>
								</div>
								</div>
								</div>";
								
								/* <!-- //bootstrap-pop-up --> */
							}
							
							
						?>
						
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //services-bottom -->
			
			
			<!-- flexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
							$('body').removeClass('loading');
						}
					});
				});
			</script>
			<!-- //flexSlider -->
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
		</body>
	</html>		