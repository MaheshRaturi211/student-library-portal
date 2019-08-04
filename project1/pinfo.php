<?php
   include('data.php');
?>
<html>
<head>
<style>
body{
	padding:0;
	margin:0;
}
.text{
	font-size:20px;
}
.box{
	width:1000px;
	height:300px;
}
.hcolor{
	background-color:#28d2fc;
}
.vcolor{
	background-color:white;
}
</style>
</head>
<body>

<div>
<fieldset class="box">
<legend><span style='color:white;font-size:25px;'>Personal-Information</span></legend>
<?php
$con=mysqli_connect("localhost","root","","university");
$sql="select * from users where Eid='$_SESSION[id]' and uname='$_SESSION[name]'";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
echo "<table cellspacing='5px' cellpadding='5px' class='text' width='1000px'>";
echo "<tr>";
echo "<td class='hcolor'>".'Enrollment-ID'."</td>";
echo "<td class='vcolor'>".$rows['Eid']."</td>";
echo "<td class='hcolor'>".'Name'."</td>";
echo "<td class='vcolor'>".$rows['uname']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='hcolor'>".'Father-Name'."</td>";
echo "<td class='vcolor'>".$rows['fname']."</td>";
$x="select cname from courses where ccode=$rows[ccode]";
$y=mysqli_query($con,$x);
while($z=mysqli_fetch_array($y)){
echo "<td class='hcolor'>".'Course' ."</td>";
echo "<td class='vcolor'>".$z['cname']."</td>";
}
echo "</tr>";
echo "<tr>";
echo "<td class='hcolor'>".'Branch/semester'."</td>";
echo "<td class='vcolor'>".$rows['branch']."/".$rows['sem']."</td>";
echo "<td class='hcolor'>".'Contact'."</td>";
echo "<td class='vcolor'>".$rows['phn']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='hcolor'>".'Present-Address'."</td>";
echo "<td colspan=3 class='vcolor'>".$rows['addr']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='hcolor'>".'Email'."</td>";
echo "<td class='vcolor'>".$rows['email']."</td>";
echo "</tr>";
echo "</table>";
mysqli_close($con);
}
?>
</fieldset>
</div>
</body>
</html>