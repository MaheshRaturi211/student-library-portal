<?php
session_start();
$con=mysqli_connect("localhost","root","","university");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin:0;
	padding:0;
}
.image{
    width:100%;
	height:100%;
	position:fixed;
}

.login{
     position:absolute;
     top:20px;
     left:200px;
	 width:450px;
	 height:640px;
	 padding:10px;
	 background-color:#eee;
    border:1px solid black;
}
.btn{
    position:absolute;
	top:550px;
	left:170px;
	background-color:mediumseagreen;
	border:none;
	width:100px;
	padding:10px;
	border-radius:10px;
}
.text{
    font-size:15px;
	font-family:verdana;
}
.input{
    width:250px;
	height:30px;
}
</style>
</head>
<body onload="">
<div class="login">
<?php
$x=$_POST["input"];
$_SESSION["eid"]=$x;
$sql="select * from users where Eid='$x';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<table cellspacing='5px' cellpadding='5px'>
<form action='save.php' method='POST' id="form">
<tr>
<td><b class='text'>Enrollment-ID:</b></td>
<td ><input type='text' name='EID' class='input' value='<?php echo $row[0];?>'></td>
</tr>
<tr>
<td><b class='text'>Name:</b></td>
<td><input type='text' name='uname' class='input' value='<?php echo $row[1];?>'></td>
</tr>
<tr>
<td><b class='text'>Father's Name:</b></td>
<td><input type='text' name='fname' class='input' value='<?php echo $row[2];?>'></td>
</tr>
<tr>
<td><b class='text'>Password:</b></td>
<td><input type='password' name='pwd' class='input'></td>
</tr>
<tr>
<td><b class='text'>Email:</b></td>
<td><input type='email' name='email' class='input' value='<?php echo $row[4];?>'></td>
</tr>
<tr>
<td><b class='text'>Course:</b></td>
<td>
<?php
$x="select * from courses";
$res=mysqli_query($con,$x);
echo "<select name='course' class='input'>";
echo "<option disabled selected>----select----</option>";
while($rows=mysqli_fetch_array($res)){
echo "<option value='$rows[ccode]'>".$rows['cname']."</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td><b class='text'>Branch:</b></td>
<td><input type='text' name='branch' class='input' value='<?php echo $row[6];?>'></td>
</tr>
<tr>
<td><b class='text'>Semester:</b></td>
<td><input type='number' name='sem' class='input' value='<?php echo $row[7];?>'></td>
</tr>
<tr>
<td><b class='text'>Address:</b></td>
<td><textarea name='addr' rows=2 cols=30 ><?php echo $row[8];?></textarea></td>
</tr>
<tr>
<td><b class='text'>Phone No.:</b></td>
<td><input type='number' name='phn' class='input' value='<?php echo $row[9];?>'></td>
</tr>
<?php
mysqli_close($con);
?>
<center><input name='submit' type='submit' value='Update' class='btn text'></center>
</form>
</table>
</div>
</body>
</html>