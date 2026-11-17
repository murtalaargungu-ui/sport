<!DOCTYPE html>
<html>
<head>
	<title>create account</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<?php include('header.php');?>

<center> 
	<div class="form_container">
	<center>
	<form>
		<label class="form_label">First Name : </label><input type="text" name="" class="create_acc_inpt" placeholder="First Name"><br><br><br><br>
		<label class="form_label">Last Name : </label><input type="text" name="" class="create_acc_inpt" placeholder="Last Name"><br><br><br><br>
		<label class="form_label">Nationality : </label><input type="country" name="" class="create_acc_inpt" placeholder="Nationality"><br><br><br><br>
		<label class="form_label">Email :       </label><input type="email" name="" class="create_acc_inpt" placeholder="Email"><br><br><br><br>
		<label class="form_label">Username : </label><input type="Username" name="" class="create_acc_inpt" placeholder="Username"><br><br><br><br>
		<label class="form_label">Password : </label><input type="Password" name="" class="create_acc_inpt" placeholder="Password"><br><br><br><br>
		<button style="color:#00f; font-weight: bolder;background-color: #000;
		font-size: 20px">Submit</button>
	</form>
	</div>
	</center>

<?php include("footer.php") ;?>

</html>
<script type="text/javascript">
	.form_container{background-color:red;}

</script>