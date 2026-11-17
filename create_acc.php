<!DOCTYPE html>
<html>
<head>
	<title>create account</title>
	<link rel="stylesheet" type="text/css" href="indexreg.css">
</head>
<?php include('header.php');?>

<center> 
	<div class="form_container">
	<center>
	<form action="connect.php" method="post">
		<label class="form_label">First Name:</label><input type="text" name="First_Name" class="create_acc_inpt" placeholder="First Name" required="First Name" ><br><br><br><br>
		<label class="form_label">Last Name:</label><input type="text" class="create_acc_inpt" placeholder="Last Name" name="Last_Name"  required="Last Name"><br><br><br><br>
		<label class="form_label">Nationality : </label><input type="country" class="create_acc_inpt" placeholder="Nationality" name="Nationality" required=""><br><br><br><br>
		<label class="form_label">Email :</label><input type="email" class="create_acc_inpt" placeholder="Email" name="Email" required=""><br><br><br><br>
		<label class="form_label">Username : </label><input type="Username" class="create_acc_inpt" placeholder="Username" name="Username" required="Username"><br><br><br><br>
		<label class="form_label">Password : </label><input type="Password" class="create_acc_inpt" placeholder="Password" name="Password" required="Password"><br><br><br><br>
		<button name="Submit" style="color:#00f; font-weight: bolder;background-color: #000;
		font-size: 20px">Submit</button>
	</form>
	</div>
	</center>

<?php include("footer.php") ;?>
</html>