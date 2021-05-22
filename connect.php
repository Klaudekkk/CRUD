<?php
$servername =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   "cdv";
    $con=mysqli_connect($servername,$username,$password,"$dbname");
    if($con === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>         