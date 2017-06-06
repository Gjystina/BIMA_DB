<?php
require("menu.php");

	session_start();
	if(!isset($_SESSION	["newmember"]))
	{
		header("Location: index.php");
		exit();
	}
	//check if u are logged in and if not, send us back to index page.
?>

</br></br><h2>You are logged in</h2></br></br>

<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
		session_start();
	}
		include('db_connect.php');
?>
<html>
 <head>
    <title> Registrieren </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
 </head>
 
<body>
	<?php
	//include('menu.php');
	?>
		<div>
		<h1 id="reg"> Hallo AdministratorIn. Du kannst hier neue Heilkraeuter hinzufuegen. </br>
			<?php
	
	if(isset($_POST['speichern'])){
		
		$ALname = $_POST['ALname'];
		$BOname = $_POST['BOname'];
		$ort = $_POST['ort'];
		$samelzeit = $_POST['samelzeit'];
		
		$insert = $pdo->prepare("INSERT INTO heilkraeuter (ALname, BOname, ort, samelzeit)
		values(:ALname, :BOname, :ort, :samelzeit) ");
		
		$insert->bindParam(':ALname', $ALname);
		$insert->bindParam(':BOname', $BOname);
		$insert->bindParam(':ort', $ort);
		$insert->bindParam(':samelzeit', $samelzeit);
		
		$insert->execute();
		echo $insert;
	}

//$pdo = null;


?>

<div style="width:600px ; height:700px; float:left;">
<div style="padding:70px;">

<h2>Füge Neue Heilkräuter Hier</h2></br>

<form method = "post">

<input type="text" name = "ALname" placeholder="Albanische Name"></br></br>
<input type="text" name = "BOname" placeholder="Botanische Name"></br></br>
<input type="text" name = "ort" placeholder="ort"></br></br>
<input type="text" name = "samelzeit" placeholder="samelzeit"></br></br>


<input type="submit" name ="speichern" value="speichern"></br></br>

<a href="logout.php">Log out</a>
</form>



</div>
</div>
</div>
</body>
</html>



