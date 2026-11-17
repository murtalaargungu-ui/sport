<?php

$connection = mysqli_connect('localhost','root','','template');

if(isset($_POST['submit'])){
	$Username = $_POST['Username'];
	$password = $_POST['Password'];

	if($connection==true){
		echo"connection good";
	}
	else{
		echo "bad connection";}

		$query="select * from register where Username='$Username' and password='$password'";

	$rows = mysqli_query($connection,$query);



if( mysqli_num_rows($rows) == 1) {

	while ($row = mysqli_fetch_assoc($rows)) {
		$Username=$row['Username'];
		$password=$row['Password'];
		session_start();
		$_session['Username']=$Username;
		$_session['Password']=$password;
	}



	echo "<script> alert('WELCOME TO ADMIN LOGIN YOU CAN ACCESS TO DATABASE')</script>";

	header('location:head.html');
	

} 
else{
	echo "<script> alert('YOU HAVE NOT RESGISTER OR INVALID USERNAME AND PASSWORD')</script> ";



}

}

?>