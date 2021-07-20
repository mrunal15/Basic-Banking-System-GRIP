<?php
$server = "localhost" ;
$username = "root";
$password = "" ;
$dbname = "grip" ;

$conn = mysqli_connect($server , $username , $password , $dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
