

<?php
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=bima;port=3306", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO heilkraeuter (ALname, BOname, ort, samelzeit)
    VALUES ('Kamomil', 'Anthemis tinctoria', 'Malesi e Madhe', 'Fruehling und Sommer')";
	
    $conn->query($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>