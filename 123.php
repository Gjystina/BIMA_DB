 <?php

$username = "root";
$password = "";

try {
     $conn = new PDO("mysql:host=localhost;dbname=bima;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 


<h3>Neues Heilpflanze anlegen</h3>
		<form action="FahrzeugFormular.php" method="post">
			<table>
				<tr>
					<td>ALname</td>
					<td><input type="text" name="ALname" maxlength="50" /></td>
				</tr>
				<tr>
					<td>BOname</td>
					<td><input type="text" name="BOname" maxlength="50" /></td>
				</tr>
				<tr>
					<td>ort</td>
					<td><input type="text" name="ort" maxlength="50" /></td>
				</tr>
				<tr>
					<td>samelzeit</td>
					<td><input type="text" name="samelzeit" maxlength="50" /></td>
				</tr>
			</table>
			
			<button name="Reset" type="Reset">Reset</button>
			<button name="Send" type="submit">Anlegen</button>
		</form>
		
		<?php
		
			if(isset($_POST["Send"])) {
				
				require_once 'dbConnect.php';
				
				$insert = "INSERT INTO heilkraeuter (ALname,BOname, ort, samelzeit) VALUES('"
					. $_POST["ALname"] . "', '"
					. $_POST["BOname"] . "', "
					. $_POST["ort"]
					. $_POST["samelzeit"]
					. ")";
				
				$result = $dbh->query($insert);
				
				if($result)
					echo "<br />Die Heilpflanze wurde erfolgreich angelegt!";
			
				else
					echo "Die Heilpflanze wurde nicht angelegt!<br />" . $insert;

			}
		
		?>