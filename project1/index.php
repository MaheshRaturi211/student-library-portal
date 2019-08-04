<!DOCTYPE html>
<html>
<head>
<script src='jquery.js'>
</script>
<style>
body{
	padding:0;
	margin:0;
}
.img{
	width:100%;
	height:900px;
    position:fixed;
}
.header{
	position:absolute;
	top:40px;
	left:900px;
}
.header a{

	display:inline;
	padding:16px 25px;
	color:white;
	text-decoration:none;
}
.header a:hover{
	color: #28d2fc;
}
.main{
    font-size:60px;
	color:white;
}
.box{
	position:absolute;
	top:170px;
	left:350px;
}
#sim{color:#28d2fc;
}
.main2{
    font-size:20px;
	color:black;
}
.btn{
	position:absolute;
	top:400px;
	left:690px;
	width:70px;
	padding:10px 30px;
	border:2px solid white ;
	
	color:white;
	font-size:22px;
	border-radius:10px;
	text-decoration:none;
}
.btn:hover{
	color:#28d2fc;
	border:2px solid #28d2fc;
}

.login{
	position:absolute;
	top:900px;
	width:100%;
	height:800px;
	padding-top:40px;
		background-color:white;
}
.courses{
	position:absolute;
	top:200px;
	left:230px;
	width:1300px;
	height:500px;

}
.outer{
	float:left;
	height:400px;
	width:300px;
	margin-left:60px;
	background-color: white;
}
.img1{
	width:300px;
	height:300px;
	border-radius:100%;
}
.white{
	background-color:#eee;
	height:100px;
}
.btn1{
	position:absolute;
	top:700px;
	left:690px;
	width:160px;
	padding:8px 30px;
	background-color:#2e86c1;
	color:white;
	font-size:22px;
	border-radius:10px;
	text-decoration:none;
}
.btn1:hover{
	background-color:white;
	color:#2e86c1;
	border:2px solid #2e86c1;
}
.log{
	position:absolute;
	top:1800px;
	width:100%;
	height:500px;
	padding-top:40px;
}
.login1{
     position:absolute;
     top:100px;
     left:800px;
	 width:320px;
	 height:250px;
	 padding:10px;
     border-radius:10px;
	  background:rgb(10, 40, 120);
	 background:rgba(10, 40, 120,0.7);
}
.btn2{
    position:absolute;
	top:180px;
	left:100px;
	background-color:mediumseagreen;
	border:none;
	width:100px;
	padding:10px;
	border-radius:10px;
}
.text{
    font-size:15px;
	font-family:verdana;
	color:white;
}
.input{
    width:150px;
	height:20px;
	border:none;
}
.error{
	position:absolute;
	top:700px;
	left:500px;
	color:red;
}
.log{
	padding:10px;
}
.about{
	position:absolute;
	top:100px;
	left:230px;
	width:300px;
}
</style>
</head>
<body>
<div id="slideshow">
   <div>
     <img src="building7.jpg" class="img">
   </div>
   <div>
     <img src="building10.jpg" class="img">
   </div>
   <div>
     <img src="classroom.jpg" class="img">
   </div>
   <div>
     <img src="img1.jpg" class="img">
   </div>
</div>
<div class="header">
<a href="index.php" class="home">HOME</a>
<a class="events">EVENTS</a>
<a class="course" href="#course">COURSES</a>
<a class="faculty">FACULTY</a>
<a class="download">DOWNLOAD</a>
</div>
<div class="box">
<h1 align="center" class="main"><b>University Management <span id="sim">System<span></b></h1>
<h1 align="center" class="main2"><b>Student Information Management</b></h1>
</div>
<a class="btn" href="#login"><b>LOGIN</b>
</a>
<div id="#login" class="login">
<a name="course"></a>
<h1 align="center" style="color: #2e86c1">Our Featured Courses</h1>
<p align="center">Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</p>
<div class="courses">
<div class="outer">
<img src="image13.jpg" class="img1">
<h5 style="color:grey" align="center"><i>May 3,2018</i></h5>
<p style="color:black" align="center">Engineering departmment ppfkdgifuafibju ebfnfjbsfbb ujbgbjubvjjjsf jsejfjsefjjsf jbjfjbewfjndsdf</p>
</div> 
<div class="outer">
<img src="image12.jpg" class="img1">
<h5 style="color:grey" align="center"><i>May 3,2018</i></h5>
<p style="color:black" align="center">Engineering departmment ppfkdgifuafibju ebfnfjbsfbb ujbgbjubvjjjsf jsejfjsefjjsf jbjfjbewfjndsdf</p>
</div>
<div class="outer">
<img src="14.jpg" class="img1">
<h5 style="color:grey" align="center"><i>May 3,2018</i></h5>
<p style="color:black" align="center">Engineering departmment ppfkdgifuafibju ebfnfjbsfbb ujbgbjubvjjjsf jsejfjsefjjsf jbjfjbewfjndsdf</p>
</div>
</div>
<a href="#login"><div class="btn1">View All Courses</div></a>
</div>
<div class="log">
<a name="login"></a>
<div class="about">
<h1 style="color:white"> About Us</h1>
<p style="color:white;font-size:20px;">Responding to the needs of students and society, Williams College's access to education provides relevant opportunities and a
 supportive environment for you to realize your goals.
 We work to provide you with the right tools, pathways, flexibility, and convenience to make your studying experience here successful. </p>
</div>
<div class="login1">
<table cellspacing="5px" cellpadding="5px">
<form action="index.php" method="post">
<tr>
<td><b class="text">User Type:</b></td>
<td ><select name="list" class="input"><option disabled selected>------select------</option><option value="one">Admin</option><option value="two">Faculty</option><option value="three">Student</option></select></td>
</tr>
<tr>
<td><b class="text">Enrollment-ID:</b></td>
<td ><input type="text" name="EID" class="input"></td>
</tr>
<tr>
<td><b class="text">Username:</b></td>
<td ><input type="text" name="uname" class="input"></td>
</tr>
<tr>
<td><b class="text">Password:</b></td>
<td><input type="password" name="pwd" class="input"></td>
</tr>
<center><input name="submit" type="submit" value="Login" class="btn2 text"></center>
</form>
</table>
<?php
 session_start();
 if($_SERVER['REQUEST_METHOD']=='POST'){
if (isset($_POST['submit'])) {
if(empty($_POST['uname']) || empty($_POST['pwd']))
{
    echo "Invalid Details!";	
}
else{
$x=$_POST["EID"];
$y=$_POST["uname"];
$con=mysqli_connect("localhost","root","","university");
if($_POST['list']=='one')
{  
$sql="select * from users where Eid='$x' and pwd='$_POST[pwd]'";
mysqli_query($con,$sql);
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:admin.php");
}
else if($_POST['list']=='three'){
$sql="select * from users where Eid='$x' and pwd='$_POST[pwd]'";
mysqli_query($con,$sql);
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:dashboard.php");
}
else if($_POST['list']=='two'){
   $sql="select * from faculty where Eid='$x' and pwd='$_POST[pwd]'";
   $result=mysqli_query($con,$sql);
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:facultyhome.php");
}

else{
	echo "<p class='error'>Invalid Login Details!</p>";
}
mysqli_close($con);
}
}
 }
?>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
	</script>
</div>
</div>
<?php
date_default_timezone_set('Asia/Kolkata');
$con=mysqli_connect("localhost","root","","university");
$x='select * from library';
$result=mysqli_query($con,$x);
while($row=mysqli_fetch_array($result)){
$datetimeObj1 = new DateTime($row['last']);
$datetimeObj2 = new DateTime();
$interval = $datetimeObj1->diff($datetimeObj2);
$dateDiff = $interval->format('%R%a');
	if($dateDiff > 0 )
	{
		$sql="insert into notification values(CURDATE(),'Please return the book with id=$row[bookid]','$row[Eid]');";
		mysqli_query($con,$sql);
	}
}
mysqli_close($con);
?>
</body>
</html>