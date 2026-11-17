
<?php
session_start();


$connection = mysqli_connect('localhost','root','','template');


	@$myfile = $_FILES['material']['name'];
	




$myquery='select * from book ';

$query= mysqli_query($connection, $myquery);


 $row=mysqli_num_rows($query);

?>

<?php

$myquery2 ="select * from book order by ID desc ";

$query2 = mysqli_query($connection, $myquery2);


 $row2=mysqli_fetch_array($query2);




?>


<!DOCTYPE html>
<html>
<head>
	<title>create account</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

	<header>
		<a href="index.html"> <label class="Link_label">HOME</label></a>
		<a href="status.php"><label class="Link_label">STATUS</label></a>
		<a href="admin.php"><label class="Link_label">ADMIN</label></a>
	</header> 

<center> 
	<div class="form_container">
	<center>
	<form action="connectupd.php"  method="post">
		<input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
		<label class="form_label">First Name : </label><input type="text" name="First_Name" class="create_acc_inpt" value="<?php echo $row2['first name']; ?>"><br><br><br><br>
		<label class="form_label">Last Name : </label><input type="text" name="Last_Name" class="create_acc_inpt" value="<?php echo $row2['second name']; ?>"><br><br><br><br>
		<label class="form_label">SEX : </label><input type="country" name="Nationality" class="create_acc_inpt" value="<?php echo $row2['sex']; ?>"><br><br><br><br>
		<label class="form_label">Email :       </label><input type="email" name="Email" class="create_acc_inpt" value="<?php echo $row2['sport type']; ?>"><br><br><br><br>
		<label class="form_label">PHONE NO. :   </label><input type="text" name="no" class="create_acc_inpt" value="<?php echo $row2['email']; ?>"><br><br><br><br>
		<label class="form_label">SPORT TYPE : </label><select type="Username" name="Username" class="create_acc_inpt" >
			<option>FOOTBALL</option>
			<option>HANDBALL</option>
			<option>BASKETBALL</option>
			<select><br><br><br><br>
		<label class="form_label">AMOUNT : </label><input type="text" name="Password" class="create_acc_inpt" value="#1000"><br><br><br><br>
		<button style="color:#00f; font-weight: bolder;background-color: #000;
		font-size: 20px">Submit</button>
	</form>
	</div>
	</center>

<?php include("footer.php") ;?>
</body>
</html>