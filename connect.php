<?php

	$connection = mysqli_connect('localhost','root','','template');

	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Nationality = $_POST['Nationality'];
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	
   if($connection==true){
		echo"connection good";
	}
	else{
		echo "bad connection";}
	

$qr="insert into register values( '  ' ,'$First_Name','$Last_Name','$Nationality','$Email','$Username','$Password')";

$run = mysqli_query($connection,$qr);


if ($run == true) {

	echo "<script>alert('data is inserted succefully')</script>";
	
}else {
	echo "<script>alert('data is inserted succefully')</script>";
	}


?>