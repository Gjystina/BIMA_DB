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
			<h1>Login Bereich</h1>
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
	 
	
$sql = "CREATE TABLE  `bima`.`Rezepte` (
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
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		
		$insert = $pdo->prepare("INSERT INTO users (username, email, pass)
		values(:username, :email, :pass) ");
		
		$insert->bindParam(':username', $username);
		$insert->bindParam(':email', $email);
		$insert->bindParam(':pass', $pass);
		
		$insert->execute();
		
	}
	else if(isset($_POST['signin'])){
		
		$email= $_POST['email'];
		$pass= $_POST['pass'];
		
		$insert->bindParam(':email', $email);
		$insert->bindParam(':pass', $pass);
		
		$insert->execute();
		
		$select = $pdo->prepare("SELECT * FROM users WHERE email='$email' and pass='$pass'");
		$select-> setFetchMode(PDO::FETCH_ASSOCC);
		$select->execute();
		$data=$select->fetch();
		
	if($data['email']!=$email and $data['pass']!=$pass)
		{
			
			echo"Invalid email or pass";
			
		}else if($data['email']=$email and $data['pass']=$pass){
			
			$_SESSION['email']=$data['email'];
			$_SESSION['name']=$data['name'];
			
header("location:profile.php");

		}
	}
}
	
 
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

//$pdo = null;
?>

<div style="width:600px ; height:700px; float:left;">
<div style="padding:70px;">

<h2>Hier Registrieren </h2>

<form method = "post">

<input type="text" name = "username" placeholder="username">
<input type="text" name = "email" placeholder="email">
<input type="text" name = "pass" placeholder="pass">

<input type="submit" name ="speichern" value="speichern">
</form>

</div>
</div>

<div style="width:500px ; float:right; height:600px;">
<div style = "padding:85px; padding-right:200px;">

<h1>Log In Here</h1>
<form method = "post">

<input type="text" name = "email" placeholder="example@example.com"><br><br>
<input type="text" name = "pass" placeholder="*********"><br><br>

<input type="submit" name ="Signin" value="SIGN IN">
</form>
</div>
</div>
 
		</div>
		


</div>
</div>
</body>
</html>