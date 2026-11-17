<!DOCTYPE html>
<html>
	


<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>



<body bgcolor="agb(12,3,5)">
	<header>
		<a href="index.html"> <label class="Link_label">HOME</label></a>
		<a href="create_acc.php"><label class="Link_label">REGISTER</label></a>
		<a href="admin2.php"><label class="Link_label">LOGIN</label></a>
	</header>
	
	<center>
<div id="container">
	<form action="admcon.php" method="post">
		<h1 style="font-size:50px; color:bolder">Admin</h1>
	<label>Username:</label>
	<input type="text" name="myname"><br><br><br><br><br><br>
	<label>Password:</label>
	<input type="Password" name="mypassword"><br><br><br><br><br>
	<button type="submit" name="submit" id="bot" style="margin-top:-50PX;">submit</button>

	</form>
</center>
	</body>


	<?php //include('footer.php');?>
	
</html>