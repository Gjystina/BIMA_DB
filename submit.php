
<?php
	session_start();
	
    $isAdmin = false;
	if(!isset($_SESSION['usrname'])){
		header('location:login.php');
		//$error = "You must log in first";
	}
	if($_SESSION['userlv'] == 1){
		$isAdmin = false;
		}else{
		$error1;
	}
	
?>

<?php	
	
	require_once "connection.php";
	$selectkategorie = "Select id_k,name From kat_rezepte; ";
	$result1 = $conn->query($selectkategorie);
	
	
	$TMPDIR = "rezepte_img/";
	$filename = basename($_FILES['rezepte_img']['name']);
	$path= $TMPDIR.$filename;
	
	if (!move_uploaded_file($_FILES['rezepte_img']['tmp_name'],$path)){
		$errorupload=true;
		$errorMessage="It didnt work";
		
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
		<title>BIMA | Shto nje recete</title>
		<!-- custom-theme -->
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
		<script type="text/javascript" src="//maps.googleapis.com/maps/api/js"></script>
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
						BIMA
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
						<li><i class="fa fa-home" aria-hidden="true"></i><a href="receta.php">Recetat</a><span>/</span></li>
						<li><i class="fa fa-pencil" aria-hidden="true"></i>Perpuno nje recete</li>
					</ul>
				</div>
				<div class="w3layouts_breadcrumbs_right">
					<ul>
						<li><h2><i class="fa fa-home" aria-hidden="true"></i></h2><a href="logout.php">Dilni</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //breadcrumbs -->
		
		
		<div class="welcome">
			<div class="container">
				<h3 class="agileits_w3layouts_head">Shto<span> edhe ti </span>nje recete</h3>
				<div class="w3_agile_image">
					<img src="images/1.png" alt=" " class="img-responsive" />
				</div>
				
			</div>
		</div>
		
		
		
		
		<!-- Submit Recipe-->
		<div class="submit">
			<div class="title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							
							<form action="submit.php" method="post" name="form1" enctype="multipart/form-data">
								<div class="form-group">
									<label>Emri i recetës</label>
									<input type="text" name = "name" class="form-control">
								</div>
								
								
								<br>
								<div class="form-group">
									<label>Përbërësit:</label>
									
									<div id="sortable" class="ui-sortable">
										<div class="box ui-sortable-handle">
											<div class="row">
												<div class="col-lg-1 col-sm-1">
													<i class="fa fa-arrows" aria-hidden="true"></i>
												</div>
												
												<div class="col-lg-5 col-sm-5">
													<input type="text" name= "zutaten" class="form-control" placeholder="" required="required">
												</div>
												
											</div>
										</div>
									</div>
									
									
								</div>
								<br>
								
								<div class="form-group">
									<label>Zgjedh kategorine</label>
									<select class="form-control" name="kat_rezepte" data-placeholder="Choose Category">
										
										<?php
											foreach($result1 as $row){
											?>
											<option value="<?php echo $row['id_k'] ?>"><?php echo $row['name']?></option>
											<?php
											};
										?>
									</select>
								</div>
								
								<br>
								<div class="form-group">
									<label>Udhëzimet:</label>
									
									<textarea class="form-control" name = "inhalt" rows="4" required="required"></textarea>
								</div>
								<br>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Koha e përgatitjes</label>
									<div class="col-sm-10">
										<input type="text" name = "preptime" class="form-control" required="required">
									</div>
								</div>
								<br>
								<td>&nbsp;</td>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label" required="required">Ngarko Foton</label>
									<div class="col-sm-10">
										<input type="file" name="rezepte_img" class="form-control" >
									</div>
								</div>
								<br>
								<td>&nbsp;</td>
								
								
								
								<button type="submit" name = "Submit" class="btn btn-submit">Shto një recetë</button>
							<br> <br><br></form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<?php
			
			
			// pruefen, ob add gedruck wurde
			if(isset($_POST['Submit'])){
				//Eingabe vom Formular speichern
				$name = $_POST['name'];
				$inhalt = $_POST['inhalt'];
				$zutaten = $_POST['zutaten'];
				$preptime = $_POST['preptime'];
				$rezepte_foto = $_POST['rezepte_img'];
				$kategorie= $_POST['kat_rezepte'];
				
				
				
				
				//DB einbinden
				require_once 'connection.php';
				
				
				//Statement bauen
				$insert = "INSERT INTO rezepte (name, preptime, zutaten, inhalt, id_kat, rezepte_img ) VALUES('" . $_POST["name"] . "' ,'" . $_POST["preptime"] . "' , 
				'" . $_POST["zutaten"] . "' , '" . $_POST["inhalt"]. "' , '"  . $_POST["kat_rezepte"] 	 . "' ,'"  . $path	 . "')";
				$result = $conn->query($insert);
				//Statement schicken
				
				//echo "<br/><a href='receta.php'>Bima u rregjistrua</a>";
			}
			else
			{
				echo $error1;
			}
		?>
		
		
		
		
		
		
		<!-- Javascript -->
		<script src="jsrec/jquerys.min.js"></script>
		<script src="jsrec/poppers.min.js"></script>
		<script src="jsrec/bootstraps.min.js"></script>
		<script src="jsrec/select2s.min.js"></script>
		<script src="jsrec/jquery-uis.js"></script>
		
		
		<script src="jsrec/scriptss.js"></script>
		
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
	
	<!-- tes t -->
	
</html>



