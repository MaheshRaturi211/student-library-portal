<?php
   include('data.php');
?>
<html>
<head>
<style>
body{
	padding:0;
	margin:0;
	overflow:auto;
}
.img{
	width:100%;
	height:100%;
	position:fixed;
}
.text{
	position:absolute;
	top:10px;
	right:100px;
	padding:10px;
	margin:5px;
	color:white;
}
.btn{
	position:absolute;
	top:10px;
	right:10px;
	padding:10px;
	margin:5px;
	color:white;
	text-decoration:none;
	border-radius:12px;
}
.btn:hover{
	color:#28d2fc;
}
.sidemenu{
	position:absolute;
	top:150px;
	left:40px;
}
.sidemenu a{
	display:block;
	padding:16px 25px;
	width:190px;
	color:white;
	text-decoration:none;
}
.sidemenu a:hover{
	color:#28d2fc;
	background:transparent;
}
.frame{
	float:left;
	width:80%;
	height:100%;
	position:absolute;
	top:150px;
	left:300px;
	border:none;
}
.header{
	background:rgb(10, 40, 120);
	background:rgba(10, 40, 120,0.7);
	color:white;
	width:100%;
	position:absolute;
	top:60px;
}
</style>
</head>
<body>
<img src="img.jpg" class="img">
<?php
echo "<span class='text'>".$_SESSION['name'].""."</span>";
echo "<a href='session.php' class='btn'>"."Logout"."</a>";
?>
<div class="header"><div style="padding:10px;font-size:30px;color:#28d2fc">University Management System-Student Panel</div>
</div>
<div class="sidemenu">
<a href="pinfo.php" target="main">View Profile</a>
<a href="books.php" target="main">Books</a>
<a href="studentbook.php" target="main">Library Info</a>
<a href="studentnotif.php" target="main">Notification</a>
<a href="showfaculty.php" target="main">Faculties</a>
<a href="showattend.php">Attendance</a>
<a href="adminstudentrecord.php" target="main">View Students</a>
</div>
<div class="main">
<iframe name="main" class="frame"></iframe>
</div>
</body>
</html>