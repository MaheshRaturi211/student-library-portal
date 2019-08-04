<?php
   session_start();
   $con=mysqli_connect("localhost","root","","university");
?>

<html>
<head>
</head>
<body>
<?php
      $_SESSION['sid']=$_POST['sub'];	
      $sql = "SELECT * FROM users WHERE sem='$_POST[sem]'"; 
      $result = mysqli_query($con, $sql);  
      while($row= mysqli_fetch_array($result))  
      {  
	echo "<div style='background-color:white;width:500px;'>";
	echo "<form action='attend4.php' method='post'>";
	echo "<table cellpadding='10px' width='500px'>";
	echo "<tr>";
	echo "<td class='color'>"."Student ID"."</td>";
	echo "<td class='color'>"."Student Name"."</td>";
	echo "<td class='color'>"."Father Name"."</td>";
	echo "<td class='color'>"."Branch"."</td>";
	echo "</tr>";
    while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['Eid']."</td>";
	echo "<td>".$row['uname']."</td>";
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['branch']."</td>";
	echo "<td>";
	echo "<input type='checkbox' value='$row[Eid]' name='attendance_status[]'>";
	echo "</td>";
	echo "</form>";
	echo "</tr>";
	}	
	echo "</table>";
	echo "<input type='submit' value='submit' name='submit' id='btn'>";
	echo "</div>";
    }  
mysqli_close($con);
?> 
