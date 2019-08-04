<?php
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
	 width:540px;
	 height:670px;
	 padding:10px;
	 background: rgb(204, 204, 204);
	 background: rgba(204, 204, 204, 0.5);
    border:1px solid black;
}
.btn{
    position:absolute;
	top:570px;
	left:170px;
	background-color:mediumseagreen;
	border:none;
	width:100px;
	padding:10px;
	border-radius:10px;
}
.text{
    font-size:20px;
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
<table cellspacing="5px" cellpadding="5px">
<form action="register.php" method="post">
<tr>
<td><b class="text">Enrollment-ID:</b></td>
<td ><input type="text" name="EID" class="input"></td>
</tr>
<tr>
<td><b class="text">Name:</b></td>
<td><input type="text" name="uname" class="input"></td>
</tr>
<tr>
<td><b class="text">Father's Name:</b></td>
<td><input type="text" name="fname" class="input"></td>
</tr>
<tr>
<td><b class="text">Password:</b></td>
<td><input type="password" name="pwd" class="input"></td>
</tr>
<tr>
<td><b class="text">Email:</b></td>
<td><input type="email" name="email" class="input"></td>
</tr>
<tr>
<td><b class="text">Course:</b></td>
<td>
<?php
$x='select * from courses';
$result=mysqli_query($con,$x); 
echo "<select name='course' class='input'>";
echo "<option disabled selected>----select----</option>";
while($row=mysqli_fetch_array($result)){
echo "<option value='$row[ccode]'>".$row["cname"]."</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td><b class="text">Branch:</b></td>
<td><input type="text" name="branch" class="input"></td>
</tr>
<tr>
<td><b class="text">Semester:</b></td>
<td><input type="number" name="sem" class="input"></td>

</tr>
<tr>
<td><b class="text">Address:</b></td>
<td><textarea name="addr" rows=2 cols=15></textarea></td>
</tr>
<tr>
<td><b class="text">Phone No.:</b></td>
<td><input type="number" name="phn" class="input"></td>
</tr>
<center><input name="submit" type="submit" value="Register" class="btn text"></center>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['EID']) || empty($_POST['uname']) || empty($_POST['fname']) || empty($_POST['pwd']) || empty($_POST['email']) || empty($_POST['course']) || empty($_POST['branch']) || empty($_POST['sem']) || empty($_POST['addr']) || empty($_POST['phn'])){
	echo "<h4 style='color:red;position:absolute;top:600px;left:100px;'>".'Please fill the empty inputs!'."</h4>";
}
else {

$sql="Insert into users values('$_POST[EID]','$_POST[uname]','$_POST[fname]','$_POST[pwd]','$_POST[email]','$_POST[course]','$_POST[branch]','$_POST[sem]','$_POST[addr]','$_POST[phn]')";
mysqli_query($con,$sql);
echo "<h4 style='color:red;position:absolute;top:600px;left:100px;'>".'Registered Successfully!'."</h4>";
}
}
?>
</form>
</table>
</div>
</body>
</html>