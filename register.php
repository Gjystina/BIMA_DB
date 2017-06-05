<!DOCTYPE html>
<html>
 <head>
   <?php require('header.php'); ?>
   
   
    <title>My First Website</title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
		<?php //require ('bima.php'); ?>
        <?php require('menu.php'); ?>
		<div id="content">
			<h1> Registration </h1>
<?php

$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=localhost;port=3306; dbname=bima", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		
    
	$sql = "DROP DATABASE IF EXISTS bima";
	$pdo -> exec($sql);
 
	$sql = "CREATE DATABASE bima";
    // use exec() because no results are returned
    $pdo->exec($sql);
    echo "Database created successfully<br>";
    $sql = "USE bima";
	$pdo->exec($sql);
	
	
$sql = "CREATE TABLE `heilkraeuter` (
	`id_H` INT NOT NULL,
	`ALname` VARCHAR(45) NOT NULL,
	`BOname` VARCHAR(45) NOT NULL,
	`ort` VARCHAR(45) NOT NULL,
	`samelzeit` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id_H`))";
  // use exec() because no results are returned
	$pdo->exec($sql);
	echo "Table created successfully";
	 
	
$sql = "CREATE TABLE`bima`.`Rezepte` (
	`id_R` INT NOT NULL,
	`name` VARCHAR(45) NOT NULL,
	`Beschreibung` VARCHAR(45) NOT NULL,
	`andzutaten` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id_R`))";
	$pdo->exec($sql);
  
	
$sql = "CREATE TABLE `bima`.`Kategorien` (
  `id_K` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `beschreibung` VARCHAR(45) NULL,
  PRIMARY KEY (`id_K`))";
  $pdo->exec($sql);
  

$sql = "CREATE TABLE `heilkraeuter_has_Kategorien` (
	`heilkräter_id_H` INT NOT NULL,
	`Kategorien_id_K` INT NOT NULL,
	PRIMARY KEY (`heilkräter_id_H`, `Kategorien_id_K`))";
	$pdo->exec($sql);
	
	
$sql = "CREATE TABLE `Rezepte_has_heilkraeuter` (
	`Rezepte_id_R` INT NOT NULL,
	`heilkräter_id_H` INT NOT NULL,
	PRIMARY KEY (`Rezepte_id_R`, `heilkräter_id_H`))";
	$pdo->exec($sql);
	
$sql = "CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))";
  $pdo->exec($sql);
	
	
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
		
	}
	
	}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$pdo = null;
?>

<div style="width:600px ; height:700px; float:left;">
<div style="padding:70px;">

<h2>Füge Neue Heilkräuter Hier</h2>

<form method = "post">

<input type="text" name = "ALname" placeholder="Albanische Name">
<input type="text" name = "BOname" placeholder="Botanische Name">
<input type="text" name = "ort" placeholder="ort">
<input type="text" name = "samelzeit" placeholder="samelzeit">


<input type="submit" name ="speichern" value="speichern">
</form>

</div>
</div>
