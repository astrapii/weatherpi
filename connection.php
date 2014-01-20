<?php
// Connection to Server
###############################
$dbname = 	"weather_pi";
$tblname = 	"general";
	$tbl_owner = "owner";
	$tbl_b = "";
$server = 	"localhost";
$useracc = 	"root";
$passwd = 	"8900428Mjvdh";
###############################

$con=mysqli_connect($server,$useracc,$passwd,$dbname);
	if (mysqli_connect_errno())
		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		} else {echo "";}

?>

