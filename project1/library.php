<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","university");
?>
<html>
<head>
<style>
body{
	overflow:hidden;
}
.btn{
    position:absolute;
	top:500px;
	left:50px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.btn1{
    position:absolute;
	top:500px;
	left:180px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.btn2{
    position:absolute;
	top:560px;
	left:90px;
	background-color:mediumseagreen;
	border:none;
	width:120px;
	padding:10px;
	border-radius:10px;
}
.box{
	width:300px;
	height:640px;
	background-color:#eee;
	position:absolute;
	top:50px;
	left:300px;
}
.input{
	height:30px;
	width:170px;
}
.color{
	background-color:#28d2fc;
}
</style>
</head>
<body>
<div class="box">
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:25px;">Book Issue</h1>
<form action="library.php" method="post" target="_self">
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Enter ID:</b><br>
<input name="id" type="text" class="input"></p>
<p align='center' style='font-size:20px;position:absolute;top:200px;left:65px;'><b>Enter Book Name:</b><br>
<input name="bname" type="text" class="input" list='books'></p>
<datalist id="books">
<?php
$sql="select * from books";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[bookid]'>".$row['bookname']."</option>";
}
?>
</datalist>
<p align="center" style="font-size:20px;position:absolute;top:300px;left:65px;"><b>Enter Issue Date:</b><br>
<input name="idate" type="Date" class="input" id=></p>
<p align="center" style="font-size:20px;position:absolute;top:400px;left:65px;"><b>Last Date:</b><br>
<input name="ldate" id="last" type="Date" class="input" id='input3'></p>
<p><input type="submit" value="Add" name="insert" class="btn"></p>
</form>
<?php
if(isset($_POST['insert'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
$id=$_POST["id"];
$bname=$_POST["bname"];
$idate=$_POST["idate"];
$ldate=$_POST["ldate"];
$sql="insert into library values('$id','$bname','$idate','$ldate');";
mysqli_query($con,$sql);
echo "<h4 form='form1' style='color:red;position:absolute;top:440;'>Book Added Successfully</h4>";
}
}
?>
<form action="books.php" method="post" target="_self">
<p><input type="submit" value="Books" name="show" class="btn1"></p>
</form>
<form action="bookshow.php" method="post" target="_self">
<p><input type="submit" value="Lib-Record" name="show1" class="btn2"></p>
</form>

</div>
</body>
<html>