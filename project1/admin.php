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
	background-color:white;
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
	top:120px;
	left:5px;
	width:15%;
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
<img src="img1.jpg" class="img">
<?php
echo "<span class='text'>".$_SESSION['name']." panel"."</span>";
echo "<a href='session.php' class='btn'>"."Logout"."</a>";
?>
<div class="header"><div style="padding:10px;font-size:30px;color:white">University Management System-Admin Panel</div>
</div>
<div class="sidemenu">
<a href="register.php" target="main">Register Student</a>
<a href="updatehome.php" target="main">Update Student</a>
<a>Add Events</a>
<a href="addbook.php" target="main">Add Books</a>
<a href="library.php" target="main">Update Library</a>
<a href="faculty.php" target="main">Add Faculties</a>
<a>Attendance</a>
<a href="adminstudentrecord.php" target="main">View Students</a>
</div>
<div class="main">
<iframe name="main" class="frame"></iframe>
</div>

</body>
</html>