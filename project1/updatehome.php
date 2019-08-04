<html>
<head>
<style>
.btn{
    position:absolute;
	top:190px;
	left:110px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.box{
	width:300px;
	height:300px;
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
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:20px;">Update Record</h1>
<form action="update.php" method="post" target="_self">
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Enter ID:</b><br>
<input name="input" type="text" class="input"></p>
<p><input type="submit" value="go" name="update" class="btn"></p>

</form>
</div>
</body>
<html>