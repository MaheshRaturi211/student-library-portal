<?php
   session_start();
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
	$sql="select * from library where Eid='$_SESSION[id]' ;";
	$result=mysqli_query($con,$sql);
	echo "<div style='background-color:white;width:900px;'>";
	echo "<table cellpadding='10px' width='900px' id='del'>";
	echo "<tr>";
	echo "<td class='color'>"."Enrollment ID"."</td>";
	echo "<td class='color'>"."Book Id"."</td>";
	echo "<td class='color'>"."Issue Date"."</td>";
	echo "<td class='color'>"."Last Date"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['Eid']."</td>";
	echo "<td>".$row['bookid']."</td>";
	echo "<td>".$row['issued']."</td>";
	echo "<td>".$row['last']."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	mysqli_close($con);
?>
</body>
</html>