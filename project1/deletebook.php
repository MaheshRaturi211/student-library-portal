<?php
   session_start();
  $con=mysqli_connect("localhost","root","","university");
?>
<?php
$sql="delete from library where Eid='$_POST[chk]' and Bookid='$_POST[chk1]'";
mysqli_query($con,$sql);
$sql="delete from notification where Eid='$_POST[chk]' and Bookid='$_POST[chk1]'";
mysqli_query($con,$sql);
header('location:bookshow.php');
?>