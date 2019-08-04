<html>
<head>
<style>
body{
	overflow:hidden;
}
.btn{
    position:absolute;
	top:300px;
	left:110px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.box{
	width:300px;
	height:400px;
	background-color:#eee;
	position:absolute;
	top:100px;
	left:300px;
}
.input{
	height:30px;
	width:170px;
}
</style>
</head>
<body>
<div class="box">
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:20px;">Students Record</h1>
<form action="showrecord.php" method="post" target="_self">
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Enter Course:</b><br>
<?php
$con=mysqli_connect("localhost","root","","university");
$x='select * from courses';
$result=mysqli_query($con,$x); 
echo "<select name='course' class='input'>";
echo "<option disabled selected>----select----</option>";
while($row=mysqli_fetch_array($result)){
echo "<option value='$row[ccode]'>".$row["cname"]."</option>";
}
echo "</select>";
?>
<p align="center" style="font-size:20px;position:absolute;top:200px;left:65px;"><b>Enter Semester:</b><br>
<input name="sem" type="text" class="input"></p>
<p><input type="submit" value="View" name="View" class="btn"></p>
</form>

</div>
</body>
<html>