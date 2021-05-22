<?php

$servername =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   "cdv";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if($conn === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$nametable= $_POST['nametable'];

$sql = "CREATE TABLE IF NOT EXISTS $nametable(
 `id` INT(30) NOT NULL , 
`nazwa` VARCHAR(30) NOT NULL , 
`ilość` INT(30) NOT NULL , 
`cena` FLOAT(10,2) NOT NULL 
)";

if (mysqli_query($conn, $sql)) {
	header("Location: index.php");
} else {
  echo "Błąd " . $conn->error;
}

$conn->close();
?>