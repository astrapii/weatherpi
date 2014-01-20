
<?PHP
include "connection.php";
$createtable = "CREATE TABLE $tbl_owner (id INTEGER PRIMARY KEY AUTO_INCREMENT, fname TEXT, lname TEXT, email TEXT)";
$execute = mysqli_query($con,$createtable) or die(mysqli_error($con));
?>