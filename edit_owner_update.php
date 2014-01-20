<?PHP
include "css.php";
include "connection.php";
include "header_footer.php";

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$query = "UPDATE $tbl_owner SET fname='$fname',lname='$lname',email='$email' WHERE id='$id'";
$execute = mysqli_query($con,$query) or die(mysqli_error($con));

?>
<br><br>  
<div style="margin-left:40px;">
<table width="400"><td>
<div class="panel panel-default">
  <div class="panel-heading">Updated Information</div>
   <div class="panel-body">
   The update was a success <?PHP echo $fname . " ";?><br><br>
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
