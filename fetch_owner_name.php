<?php
include "connection.php";
$query="SELECT * FROM $tbl_owner";
$result=mysqli_query($con,$query) or Die (mysqli_error());
while ($row=mysqli_fetch_array($result)) {
	print $row['fname'];
}
?>