<?php
$con=mysqli_connect("localhost","root","","university");
?>
<!DOCTYPE html>
<html>
<head>
<script src='jquery.js'></script>
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
	 height:540px;
	 padding:10px;
	background-color:#eee;
	color:black;
}
.btn{
    position:absolute;
	top:500px;
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
.box{
	width:400px;
	height:560px;
	background-color:#eee;
	position:absolute;
	top:20px;
	left:700px;
}
</style>
</head>
<body onload="">
<div class="login">
<table cellspacing="5px" cellpadding="5px">
<form action="faculty.php" method="post">
<tr>
<td><b class="text">Enrollment-ID:</b></td>
<td ><input type="text" name="EID" class="input"></td>
</tr>
<tr>
<td><b class="text">Faculty-Name:</b></td>
<td><input type="text" name="uname" class="input"></td>
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
<td><b class="text">Department:</b></td>
<td>
<?php
$x='select * from department';
$result=mysqli_query($con,$x); 
echo "<select name='dept' class='input'>";
echo "<option disabled selected>----select----</option>";
while($row=mysqli_fetch_array($result)){
echo "<option value='$row[dcode]'>".$row["dname"]."</option>";
}
echo "</select>";
?>
</td>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql="Insert into faculty values('$_POST[EID]','$_POST[uname]','$_POST[pwd]','$_POST[email]','$_POST[dept]','$_POST[addr]','$_POST[phn]')";
mysqli_query($con,$sql);
echo "<h4 style='color:red;position:absolute;top:600px;left:10px;'>".'Registered Successfully!'."</h4>";
}
}
?>
</form>
</table>
</div>
<div class="box">
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:20px;">Faculty-Subject</h1>
<form action="faculty.php" method="post" target="_self">
</script>
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Department:</b><br>
<select name="input2" class="input" id='dept1'>
<option disabled selected>---Select----</option>
<?php
$sql="select * from department";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[dcode]'>".$row['dname']."</option>";
}
?>
</p>
</select>
<p align='center' style='font-size:20px;position:absolute;top:200px;left:65px;'><b>Faculty Name:</b><br>
<select name='input1' id='faculty' class='input'>
<option disabled selected>---Select----</option>
</select></p>
<script>
$(document).ready(function(){  
      $('#dept1').change(function(){  
           var dcode = $(this).val();  
           $.ajax({  
                url:"faculty1.php",  
                method:"POST",  
                data:{code:dcode},  
                success:function(data){  
                     $('#faculty').html(data);  
                }  
           });  
      });  
 });   
</script>
<p align="center" style="font-size:20px;position:absolute;top:300px;left:65px;"><b>Subject:</b><br>
<select name="input3" type="text" class="input">
<option disabled selected>---Select----</option>
<?php
$sql="select * from subjects";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[sid]'>".$row['sname']."</option>";
}
?>
</p>
</select>
</p>
<p><input type="submit" value="go" name="link" class="btn"></p>
<?php
if(isset($_POST['link'])){
	$sql="Insert into facultysubject values('$_POST[input1]','$_POST[input3]')";
	mysqli_query($con,$sql);
}
mysqli_close($con);
?>
</form>
</div>
</body>
</html>