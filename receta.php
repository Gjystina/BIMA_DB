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
		<title>BIMA | Receta</title>
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
						<h1><a href="index.php"><span>B</span>ima.al<i>Bota E Bimeve</i></a></h1>
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
										<li class="active"><a href="receta.php">Receta</a></li> 
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
		<div class="breadcrumbs">
			<div class="container">
				<div class="w3layouts_breadcrumbs_left">
					<ul>
						<li><i class="fa fa-upload" aria-hidden="true"></i><a href="submit.php">Shto nje recete</a><span>/</span></li>
						<li><i class="fa fa-pencil" aria-hidden="true"></i><a href="edit_delete_rezepte.php">Perpuno recetat</a></li>
						
					</ul>
				</div>
				<div class="w3layouts_breadcrumbs_right">
					<h2>Receta</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //breadcrumbs -->
		
		
		<!-- services-bottom -->
		<div class="services-bottom">
			<div class="container">
				<h3 class="agileits_w3layouts_head agileinfo_head w3_head">Recetat e <span> bimeve</span></h3>
				<div class="w3_agile_image">
					<img src="images/17.png" alt=" " class="img-responsive">
				</div>
				<p class="agile_para agileits_para">Rritu shendetshem!</p>
				
				<br><br>
				<!-- Search -->
				<div class="search">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								
								<form action="" method="post">
									
									<div class="row">
										<div class="col-lg-3">
											
											<table>
												
												
												<label style="color:white;" style="width:300px">Choose category</label>
												
												
												<td width="10px">
													
													<select class="js-search-category form-control select2-hidden-accessible" style="width:300px" name="category" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
														
														
														<!--<option value="all">Te gjitha</option>-->
														<option value="all" <?php if($_POST['category']=="all"){echo "selected";} ?>>Te gjitha</option>
														<option value="cajra" <?php if($_POST['category']=="cajra"){echo "selected";} ?>>Cajra</option>
														<option value="estetike" <?php if($_POST['category']=="estetike"){echo "selected";} ?>>Estetike</option>
														<option value="perzierje bimesh" <?php if($_POST['category']=="perzierje bimesh"){echo "selected";} ?>>Perzierje bimesh</option>
														
														
														<?php
															/*	$result = $conn->query("SELECT * FROM kat_rezepte");
																
																while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
																$rid = $row['id_k'];
																$rname = $row['name'];
																//if(isset($_POST['category']) && $_POST['category']==$rname){
																//echo "<option value='cajra' selected= 'selected'>cajra</option>";}
																//else{
																//echo "<option value='estetike' selected= 'selected' >estetike</option>";
															}*/
														?>
														
														<!--	<option value="estetike" <?php //if($_POST['category']=="estetike"){ echo "selected"; }?> >estetike</option>
														<option value="perzierje bimesh" <?php //if($_POST['category']=="perzierje bimesh"){ echo "selected";}?> >perzierje bimesh</option>-->
													</td>
												</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span  class="dropdown-wrapper" style="width:300px" aria-hidden="true"></span></span>
												
												<td width="100px">
													
													<input type="submit" class= "btn btn-success" name="submit" value="Go"/>
												</td></input>
												
												
												
												<tr>
													<td>
														&nbsp;
													</td>
													
													
												</table>
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
					
					<!-- CSS -->
					<!-- <link href="csss/bootstrapa.min.css" rel="stylesheet">
						<link href="csss/stylesa.min.css" rel="stylesheet">
						<link href="csss/select2a.min.css" rel="stylesheet">
					<!-- Javascript -->
					<!-- <script src="jss/jquerya.min.js"></script>
						<script src="jss/poppera.min.js"></script>
						<script src="jss/bootstrapa.min.js"></script>
						<script src="jss/select2a.min.js"></script>
						
					<script src="jss/scriptsa.js"></script-->
					
					
					<?php 	
						
						
						
						
						if (isset($_POST['submit'])) {
							$category = $_POST['category'];
							if($category == 'cajra'){
								$result = $conn->query("SELECT * FROM rezepte r join kat_rezepte k on id_k=id_kat where k.kname='cajra'");
								}else if($category == 'estetike'){
								$result = $conn->query("SELECT * FROM rezepte r join kat_rezepte k on id_k=id_kat where k.kname='estetike'");
								}else if($category == 'perzierje bimesh'){
								$result = $conn->query("SELECT * FROM rezepte r join kat_rezepte k on id_k=id_kat where k.kname='perzierje bimesh'");
							}
							else{
								
								$result = $conn->query("SELECT * FROM rezepte r join kat_rezepte k on id_k=id_kat");
								
							}}
							else if (isset($_POST['submitx'])) {
								$emri = $_POST['kerko'];
								$result = $conn->query("SELECT * FROM rezepte WHERE name LIKE '%$emri%' OR inhalt LIKE '%$emri%' OR zutaten LIKE '%$emri%' OR shfaq LIKE '%$emri%'");
								} else {
								$result = $conn->query("SELECT * FROM rezepte where shfaq=1");
							}
							
							
							
							
							
							while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
								
								$id = $row['id'];
								$name = $row['name'];
								$rezepte_foto = $row['rezepte_img'];
								$inhalt = $row['inhalt'];
								$zutaten = $row['zutaten'];
								$preptime = $row['preptime'];
								
								
								
								echo  "<div class='col-md-4 w3_agileits_services_bottom_grid'>
								<div class='wthree_services_bottom_grid1'>
								<img src='$rezepte_foto' alt=' ' class='img-responsive' />
								<div class='wthree_services_bottom_grid1_pos'>
								<h4>$name</h4>
								</div>
								</div>
								<div class='agileinfo_services_bottom_grid2'>
								<p></p>
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
								$name
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span> </button>						
								</div>
								<section>
								<div class='modal-body'>
								<img src='$rezepte_foto' alt='' class='img-responsive' />
								<p style='color:black;'><br/><br/>
								Inhalt:<br/>
								$inhalt<br/><br/>
								Perberesit:<br/>
								$zutaten <br/><br/>
								Koha e pergatitjes:<br/>
								$preptime <br/><br/>
								
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