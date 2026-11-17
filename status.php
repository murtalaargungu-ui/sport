<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include ("header.php" ) ?><br>
	



	<?php
session_start();


$connection = mysqli_connect('localhost','root','','template');


	@$myfile = $_FILES['material']['name'];
	




$myquery='select * from book ';

$query= mysqli_query($connection, $myquery);


 $row=mysqli_num_rows($query);

?>

<?php

$myquery2 = "select * from book order by id desc";

$query2 = mysqli_query($connection, $myquery2);


 $row2=mysqli_fetch_array($query2);




?>

<center>
<h1>TICKET INFORMATION</h1>
</center>
<center>
	
<table border="10px">

	<form id="form">
	<tr>
	<th style="font-size: 30px;">FIRST NAME </th>
	<td style="font-size: 30px;"><?php echo $row2['first name']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px;">SECOND NAME </th>
		<td style="font-size: 30px;"><?php echo $row2 ['second name']; ?> </td>
	</tr>
	
	<tr>
		<th style="font-size: 30px; float:left;">SEX </th>
		<td style="font-size: 30px;"><?php echo $row2 ['sex']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">SPORT TYPE</th>
		<td style="font-size: 30px;"><?php echo $row2 ['email']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">PHONE NUMBER</th>
		<td style="font-size: 30px;"><?php echo $row2  ['phone']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">Email </th>
		<td style="font-size: 30px;"><?php echo $row2 ['sport type']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">SEAT NO </th>
		<td style="font-size: 30px;"><?php echo"000"; echo $row2['id']; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">SEAT ROW NO. </th>
		<td style="font-size: 30px;"><?php echo $row2 ['id']+3; ?> </td>
	</tr>

	<tr>
		<th style="font-size: 30px; float:left;">SEAT CULUM NO </th>
		<td style="font-size: 30px;"><?php echo $row2  ['id']+7; ?> </td>
	</tr>
	<tr>
		<th style="font-size: 30px; float:left;">TICKET PRICE</th>
		<td style="font-size: 30px;"><?php echo $row2 ['amount']; ?> </td>
	</tr>
	</form>


</table>

</center>
<br><br>
<center>

	<input  type="button"  onclick="myprint(form)" value="PRINT" style="color:#00f; font-weight: bolder;background-color: #a0f;
		font-size: 20px"> </input>
		
	<a href="update.php" type="button"  style="color:#00f; margin-right:-25%; font-weight: bolder;background-color: #000;
		font-size: 20px">UPDATE</a>
</center>




	<?php include ("footer.php" ) ?>

</body>
</html>
<style type="text/css">
	form{background-color:rgba(120,250,80,0.7) ;}
	
	body{background-color:rgba(123,250,87,0.6);}
	#input,input{float:right; margin-right: 40%; height:30px; padding-left:}
	label{float:left; margin-left:40%; font-size:18px;font-weight:bolder;}
</style>

<script type="text/javascript">

	function myprint(form){


		var data=document.getElementById("form");
		newwin=window.open("");
		newwin.document.write(data.outerHTML);
		newwin.print();
		newwin.close();
	}
	
</script>