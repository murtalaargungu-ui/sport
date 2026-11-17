<?php

	$connection = mysqli_connect('localhost','root','','template');
	$id=$_POST['id'];

	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Nationality = $_POST['Nationality'];
	$Email = $_POST['Email'];
	$number = $_POST['no'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	
	
   if($connection==true){
		echo"connection good";
	}
	else{
		echo "bad connection";}
	

$qr="UPDATE `template`.`book` SET 
`first name` = '$First_Name',
`second name` = '$Last_Name',
`sex` = '$Nationality',
`sport type` = '$Email',
`email` = '$number',
`amount` = '$Username',
`phone` = '#1000' WHERE `book`.`id` ='$id'";

$run = mysqli_query($connection,$qr);


if ($run == true) {

	echo "<script>alert('data is updated succefully')</script>";
	
}else {
	echo "<script>alert('Fail')</script>";
	}


?>