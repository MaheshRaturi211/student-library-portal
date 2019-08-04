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
<?php
$con=mysqli_connect("localhost","root","","university");
if(isset($_POST['View'])){
	$sql="select * from users where ccode='$_POST[course]' and sem='$_POST[sem]'";
	$result=mysqli_query($con,$sql);
	$y="select cname from courses where ccode='$_POST[course]';";
	$z=mysqli_query($con,$y);
	while($r=mysqli_fetch_array($z)){
	echo "<h2>".$r['cname']."/".$_POST['sem']."</h2>";
	echo "<div style='background-color:white;width:900px;border:1px solid grey;'>";
	echo "<table cellpadding='10px' width='900px'>";
	echo "<tr>";
	echo "<td class='color'>"."Student ID"."</td>";
	echo "<td class='color'>"."Student Name"."</td>";
	echo "<td class='color'>"."Father Name"."</td>";
	echo "<td class='color'>"."Branch"."</td>";
	echo "<td class='color'>"."Email"."</td>";
	echo "<td class='color'>"."PhoneNo"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td class='table'>".$row['Eid']."</td>";
	echo "<td class='table'>".$row['uname']."</td>";
	echo "<td class='table'>".$row['fname']."</td>";
	echo "<td class='table'>".$row['branch']."</td>";
	echo "<td class='table'>".$row['email']."</td>";
	echo "<td class='table'>".$row['phn']."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	mysqli_close($con);
	}
}
?>