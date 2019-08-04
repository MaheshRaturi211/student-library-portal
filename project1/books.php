<html>
<head>
<style>
.color{
	background-color:#28d2fc;
}
.btn{
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
$con=mysqli_connect("localhost","root","","university");
	$sql="select * from books";
	$result=mysqli_query($con,$sql);
	echo "<div style='background-color:white;width:500px;'>";
	echo "<table cellpadding='10px' width='500px'>";
	echo "<tr>";
	echo "<td class='color'>"."Book ID"."</td>";
	echo "<td class='color'>"."Book Name"."</td>";
	echo "<td class='color'>"."Total Qty"."</td>";
	echo "<td class='color'>"."Remaining Qty"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['bookid']."</td>";
	echo "<td>".$row['bookname']."</td>";
	echo "<td>".$row['Qty']."</td>";
	echo "<td>".$row['rqty']."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	mysqli_close($con);
?>


</body>
</html>