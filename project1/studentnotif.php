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
td{
	background-color:#eee;
}
</style>
</head>
<body>
<?php
	$sql="select * from notification where Eid='$_SESSION[id]'";
	$result=mysqli_query($con,$sql);
	echo "<div style='background-color:white;width:900px;'>";
	echo "<table cellpadding='10px' width='900px' id='del'>";
	echo "<tr>";
	echo "<td class='color'>"."Date"."</td>";
	echo "<td class='color'>"."Notification"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['tdate']."</td>";
	echo "<td>".$row['notif']."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	mysqli_close($con);
?>
</body>
</html>