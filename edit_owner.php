<?PHP
include "connection.php";
include "css.php";
include "header_footer.php";

$query = "SELECT * FROM owner LIMIT 1";
$execute = mysqli_query($con,$query) or die(mysqli_error($con));
while($row = mysqli_fetch_array($execute)) {
    $id= $row['id'];
	$fname= $row['fname'];
	$lname= $row['lname'];
	$email= $row['email'];
};
?>

<div style="width:500px;margin-left:10px;>"
<div class="panel panel-default">
  <div class="panel-heading">Station Owner</div>
  <div class="panel-body">

<div style="margin-left:40px;">
<form action="edit_owner_update.php" method="post">
<table width="350">
<td><label>User ID</label></td><td><input type="text" class="form-control" name="id" value=<?PHP echo "$id";?>></td><tr></tr>
<td><label>First Name</label></td><td><input type="text" class="form-control" name="fname" value=<?PHP echo "$fname";?>></td><tr></tr>
<td><label>Last Name</label></td><td><input type="text" class="form-control" name="lname" value=<?PHP echo "'$lname'";?>></td><tr></tr>
<td><label>Email Address</label></td><td><input type="text" class="form-control" name="email" value=<?PHP echo "$email";?>></td><tr></tr>
<td></td><td align="right"><button type="submit" name="submit" class="btn btn-default">Submit</button></td>
</table>
</form>
</div>

</div>
</div>
</div>