<?php
$con=mysqli_connect("localhost","root","","university");
if(isset($_POST["code"]))  
 {  
      $sql = "SELECT * FROM faculty WHERE dcode = '".$_POST["code"]."'";   
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          echo "<option value='$row[Eid]'>".$row["uname"]."</option>";  
      }  
 }  
 ?>  