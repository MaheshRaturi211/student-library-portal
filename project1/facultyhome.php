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
	background-color:white;
	width:100%;
	position:absolute;
	top:60px;
}
</style>
</head>
<body>
<img src="building10.jpg" class="img">
<?php
echo "<span class='text'>".$_SESSION['name']." panel"."</span>";
echo "<a href='session.php' class='btn'>"."Logout"."</a>";
?>
<div class="header"><div style="padding:10px;font-size:30px;color:#28d2fc">University Management System-Faculty Panel</div>
</div>
<div class="sidemenu">
<a href="addbook.php" target="main">View Profile</a>
<a href="attend.php" target="main">Update Attendance</a>
<a href="updatehome.php" target="main">Add Information</a>
<a href="adminstudentrecord.php" target="main">View Students</a>
</div>
<div class="main">
<iframe name="main" class="frame"></iframe>
</div>
</body>
</html>