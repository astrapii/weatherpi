<?PHP
include "css.php";
?>
<br><br>
<div style="margin-left:40px;">
<form action="install_complete.php" method="post">
<table width="350">
<td><label>First Name</label></td><td><input type="text" class="form-control" name="fname" placeholder="First Name"></td><tr></tr>
<td><label>Last Name</label></td><td><input type="text" class="form-control" name="lname" placeholder="Last Name"></td><tr></tr>
<td><label>Email Address</label></td><td><input type="text" class="form-control" name="email" placeholder="Email Address"></td><tr></tr>
<td></td><td align="right"><button type="submit" name="submit" class="btn btn-default">Submit</button></td>
</table>
</form>
</div>