<?php
session_start();
?>
<html>
<head>
<script src='jquery.js'></script>
<style>
.btn{
    position:absolute;
	top:300px;
	left:110px;
	background-color:mediumseagreen;
	border:none;
	width:70px;
	padding:10px;
	border-radius:10px;
}
.box{
	width:300px;
	height:400px;
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
<h1 style="color:white;padding:20px;color:mediumseagreen;position:absolute;top:10px;left:20px;">Attendance Record</h1>
<form action="attend3.php" method="post" target="_self">
<p align="center" style="font-size:20px;position:absolute;top:100px;left:65px;"><b>Semester:</b><br>
<select name="sem" class="input" id='sem'>
<option disabled selected>---Select----</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</p>
<p align="center" style="font-size:20px;position:absolute;top:200px;left:65px;"><b>Subject:</b><br>
<select name="sub" class="input" id='sub'>
<option disabled selected>---Select----</option>
</select></p>
<script>
$(document).ready(function(){  
      $('#sem').change(function(){  
           var dcode = $(this).val();  
           $.ajax({  
                url:"attend1.php",  
                method:"POST",  
                data:{code:dcode},  
                success:function(data){  
                     $('#sub').html(data);  
                }  
           });  
      });  
 });   
</script>
<p><input type="submit" value="Go" name="attend" class="btn"></p>
</form>
</div>
</body>
<html>