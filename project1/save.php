<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
$con=mysqli_connect("localhost","root","","university");
$x=$_SESSION['eid'];
$eid=$_POST['EID'];
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$addr=$_POST['addr'];
$phn=$_POST['phn'];
if(isset($_POST['EID']) || isset($_POST['pwd'])){
$sql="update users SET pwd='$pwd',Eid='$eid' where Eid='$x'";
mysqli_query($con,$sql);
}
if(isset($_POST['branch']) || isset($_POST['sem'])){
$sql="update users set branch='$branch',sem='$sem' where Eid='$x'";
mysqli_query($con,$sql);		
}
if(isset($_POST['addr']) || isset($_POST['phn'])){
$sql="update users set addr='$addr',phn='$phn' where Eid='$x'";
mysqli_query($con,$sql);	
}
if(isset($_POST['email'])){
$sql="update users set email='$email' where Eid='$x'";
mysqli_query($con,$sql);
}	
if(isset($_POST['course'])){
$sql="update users set ccode='$course' where Eid='$x'";
mysqli_query($con,$sql);
}
if(isset($_POST['uname']) || isset($_POST['fname'])){
$sql="update users set uname='$uname',fname='$fname' where Eid='$x'";
mysqli_query($con,$sql);
}
}
echo "<h4 style='color:red;position:absolute;top:400px;left:400px;'>Updated Successfully!</h4>";
session_destroy();
mysqli_close($con);
}
?>
