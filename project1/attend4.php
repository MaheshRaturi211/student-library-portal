<?php
session_start();
$con=mysqli_connect("localhost","root","","university");
?>

<?php
if(isset($_POST['submit'])){
foreach($_POST['attendance_status'] as $selected) {
	echo "<p>".$selected ."</p>";
	echo "<p>".$_SESSION['sid']."</p>";
   $sql="insert into attendance values('$selected','$_SESSION[sid]','present',CURDATE());";
   mysqli_query($con,$sql);
}
}
mysqli_close($con);
?>

