<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
if(empty($_POST['uname']) || empty($_POST['pwd']))
{
    echo "Invalid Details!";	
}
else{
$x=$_POST["EID"];
$y=$_POST["uname"];
$con=mysqli_connect("localhost","root","","university");
$sql="select * from users where Eid='$x' and pwd='$_POST[pwd]'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows==1 && $_POST['list']=='one')
{  
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:admin.php");
}
else if($rows==1 && $_POST['list']=='two'){
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:dashboard.php");
}
else{
	echo "Invalid Login Details!";
}
mysqli_close($con);
}
}
?>
</body>
</html>