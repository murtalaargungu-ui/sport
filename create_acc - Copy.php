<!DOCTYPE html>
<html>
<head>
	<title>create account</title>
	<link rel="stylesheet" type="text/css" href="">
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
	<form action="connect2.php"  method="post">
		<label class="form_label">First Name : </label><input type="text" name="First_Name" class="create_acc_inpt" placeholder="First Name"><br><br><br><br>
		<label class="form_label">Last Name : </label><input type="text" name="Last_Name" class="create_acc_inpt" placeholder="Last Name"><br><br><br><br>
		<label class="form_label">SEX : </label><input type="country" name="Nationality" class="create_acc_inpt" placeholder="SEX"><br><br><br><br>
		<label class="form_label">Email :       </label><input type="email" name="Email" class="create_acc_inpt" placeholder="Email"><br><br><br><br>
		<label class="form_label">PHONE NO. :   </label><input type="text" name="no" class="create_acc_inpt" placeholder="PHONE NO"><br><br><br><br>
		<label class="form_label">SPORT TYPE : </label><select type="Username" name="Username" class="create_acc_inpt" placeholder="SPORT">
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

<style type="text/css">
	
	body{ margin:0%;



	background-image:url(images/1.jpg)}



footer,header{background-color:#00a;
	padding: 20px;
	position:sticky;
	
}
.Link_label{font-size:20px;
	font-weight:bolder;
	color: #8ff;

	margin-left:60px;

}
footer{font-size:20px;
	font-weight:bolder;
	color: #8ff;
	margin-left:0px;
	margin-top:15vh; 


}
.form_container{
	margin-top:1%;
background-color:rgba(0,0,0,0.7);
	padding-left: 10px;
	padding-top: 3px;
	padding-right:15px;
	padding-bottom:300px;
	width: 300px;
	height: 300px;
}
.create_acc_inpt{

	width: 160px;
	height: 30px;
	float: right;
}
.form_label{

	float: left;
	font-weight:20px;
	font-size:20px;
	color: #00f;
	font-weight: bolder;
}
</style>