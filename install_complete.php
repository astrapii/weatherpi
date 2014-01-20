<?PHP
include "css.php";
include "connection.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$delete = "DELETE FROM owner";
$query = "INSERT INTO $tbl_owner (fname,lname,email) VALUES ('$fname','$lname','$email')";
$execute = mysqli_query($con,$delete) or die(mysqli_error($con));
$execute = mysqli_query($con,$query) or die(mysqli_error($con));


?>
<br><br>  
<div style="margin-left:40px;">
<table width="400"><td>
<div class="panel panel-default">
  <div class="panel-heading">Installation Information</div>
   <div class="panel-body">
   The installation was a success <?PHP echo $fname . " ";?><br><br>
   Your details are now as follows:<br><br>
   <table>
   <td>First Name:<td></td><td><strong><?PHP echo $fname;?></strong></td><tr>
   <td>Last Name:<td></td><td><strong><?PHP echo $lname;?></strong></td><tr>
   <td>Email Address:<td></td><td><strong><?PHP echo $email;?></strong></td>
   </table>
   </div></div>
 </div></td>
</table>
</div>
