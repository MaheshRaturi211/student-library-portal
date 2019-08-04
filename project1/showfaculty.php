<?php
   $con=mysqli_connect("localhost","root","","university");
?>
<html>
<head>
<style>
.color{
	background-color:#28d2fc;
}
#btn{
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
td{
	background-color:#eee;
}
</style>
</head>
<body>
<?php
	$sql="select * from Faculty";
	$result=mysqli_query($con,$sql);
	echo "<div style='background-color:white;width:900px;'>";
	echo "<table cellpadding='10px' width='900px' id='del'>";
	echo "<tr>";
	echo "<td class='color'>"."Enrollment ID"."</td>";
	echo "<td class='color'>"."Faculty Name"."</td>";
	echo "<td class='color'>"."Department"."</td>";
	echo "<td class='color'>"."Email"."</td>";
	echo "<td class='color'>"."PhoneNo"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['Eid']."</td>";
	echo "<td>".$row['uname']."</td>";
	$sql="select * from department where dcode='$row[dcode]'";
	$res=mysqli_query($con,$sql);
	$rw=mysqli_fetch_array($res);
	echo "<td>".$rw['dname']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['phn']."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	mysqli_close($con);
?>
</body>
</html>