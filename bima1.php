 <?php

$username = "root";
$password = "";

try {
	// Create connection
    $conn = new PDO("mysql:host=localhost;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$sql = "DROP DATABASE IF EXISTS bima";
	$conn -> exec($sql);
    // Create database
	$sql = "CREATE DATABASE bima";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
	// USE database
    $sql = "USE bima";
	$conn->exec($sql);
	
	//DROP TABLE IF EXISTS `heilkraeuter` ;
//$sql = "CREATE TABLE IF NOT EXISTS `bima`.`heilkraeuter` (
// sql to create table
	$sql = "CREATE TABLE `heilkraeuter` (
	`id_H` INT NOT NULL,
	`ALname` VARCHAR(45) NOT NULL,
	`BOname` VARCHAR(45) NOT NULL,
	`ort` VARCHAR(45) NOT NULL,
	`samelzeit` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id_H`))";
  // use exec() because no results are returned
	$conn->exec($sql);
	echo "Table created successfully";
	 
	//DROP TABLE IF EXISTS `Rezepte` ;
	// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `bima`.`Rezepte` (
	`id_R` INT NOT NULL,
	`name` VARCHAR(45) NOT NULL,
	`Beschreibung` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id_R`))";
	$conn->exec($sql);
  
	//DROP TABLE IF EXISTS `Kategorien` ;
	// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `bima`.`Kategorien` (
  `id_K` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `beschreibung` VARCHAR(45) NULL,
  PRIMARY KEY (`id_K`))";
  $conn->exec($sql);
  
	//DROP TABLE IF EXISTS `bima`.`heilkraeuter_has_Kategorien` ;
//$sql = "CREATE TABLE IF NOT EXISTS `heilkraeuter_has_Kategorien` (
// sql to create table
$sql = "CREATE TABLE `heilkraeuter_has_Kategorien` (
	`heilkräter_id_H` INT NOT NULL,
	`Kategorien_id_K` INT NOT NULL,
	PRIMARY KEY (`heilkräter_id_H`, `Kategorien_id_K`))";
	$conn->exec($sql);
	
	//DROP TABLE IF EXISTS `bima`.`AndereZutaten` ;
//$sql = "CREATE TABLE IF NOT EXISTS `bima`.`AndereZutaten` (
// sql to create table
$sql = "CREATE TABLE  `AndereZutaten` (
	`id_AZ` INT NOT NULL,
	`name` VARCHAR(45) NOT NULL,
	`Beschreibing` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id_AZ`))";
	$conn->exec($sql);
	 
	 //DROP TABLE IF EXISTS `bima`.`Rezepte_has_AndereZutaten` ;
//$sql = "CREATE TABLE IF NOT EXISTS `bima`.`Rezepte_has_AndereZutaten` (
// sql to create table

$sql = "CREATE TABLE `Rezepte_has_AndereZutaten` (
	`Rezepte_id_R` INT NOT NULL,
	`AndereZutaten_id_AZ` INT NOT NULL,
	`Menge` VARCHAR(45) NULL,
	PRIMARY KEY (`Rezepte_id_R`, `AndereZutaten_id_AZ`),
	INDEX `fk_Rezepte_has_AndereZutaten_AndereZutaten1_idx` (`AndereZutaten_id_AZ` ASC),
	INDEX `fk_Rezepte_has_AndereZutaten_Rezepte1_idx` (`Rezepte_id_R` ASC),
	CONSTRAINT `fk_Rezepte_has_AndereZutaten_Rezepte1`
    FOREIGN KEY (`Rezepte_id_R`)
    REFERENCES `bima`.`Rezepte` (`id_R`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rezepte_has_AndereZutaten_AndereZutaten1`
    FOREIGN KEY (`AndereZutaten_id_AZ`)
    REFERENCES `bima`.`AndereZutaten` (`id_AZ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";
	$conn->exec($sql);
	
	//DROP TABLE IF EXISTS `bima`.`Rezepte_has_heilkraeuter` ;
	
//$sql = "CREATE TABLE IF NOT EXISTS `Rezepte_has_heilkraeuter` (
// sql to create table
$sql = "CREATE TABLE `Rezepte_has_heilkraeuter` (
	`Rezepte_id_R` INT NOT NULL,
	`heilkräter_id_H` INT NOT NULL,
	PRIMARY KEY (`Rezepte_id_R`, `heilkräter_id_H`))";
	$conn->exec($sql);
	
	}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>