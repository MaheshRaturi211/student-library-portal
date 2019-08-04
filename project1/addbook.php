<html>
<head>
<style>
.btn{
    position:absolute;
	top:400px;
	left:110px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.box{
	width:300px;
	height:500px;
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
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:20px;">Add Book</h1>
<form action="addbook.php" method="post" target="_self" id="form1">
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Enter Book ID:</b><br>
<input name="input" type="text" class="input"></p>
<p align="center" style="font-size:20px;position:absolute;top:200px;left:65px;"><b>Enter Book Name:</b><br>
<input name="input1" type="text" class="input"></p>
<p align="center" style="font-size:20px;position:absolute;top:300px;left:65px;"><b>Enter Quantity:</b><br>
<input name="input2" type="number" class="input"></p>
<p><input type="submit" value="Add" name="add" class="btn"></p>
</form>
<?php
if(isset($_POST['add'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
$con=mysqli_connect("localhost","root","","university");
$sql="insert into books values('$_POST[input]','$_POST[input1]','$_POST[input2]','$_POST[input2]');";
mysqli_query($con,$sql);
echo "<h4 form='form1' style='color:red;position:absolute;top:440;'>Book Added Successfully</h4>";
mysqli_close($con);
}
}
?>
</div>
</body>
<html>