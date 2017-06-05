<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bima";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM heilkraeuter WHERE id_H=1";
 
    $conn->query($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

</body>
</html>