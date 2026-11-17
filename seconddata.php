<?php  require 'DBconnection.php'  ?> 


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php include("header.php") ?>

	<br><br><br><br>
	
		</center>

		
	</nav>
	</nav>
	<center>
	<table cellpadding="10" border="1" cellspacing="0">
		<tr>
			
			<td>ID_NO.</td>
			<td>FIRST NAME</td>
			<td>SECOND NAME</td>
			<td>SEX</td>
			<td>PHONE NUMBER</td>
			<td>AMOUNT</td>
			<td>SPORT TYPE</td>
			<td>EMAIL</td>
			<td>OPERATION</td>
			</tr>
			<?php
			$rows = mysqli_query($connect,"select * from book order by id desc") 


			 ?>
			 <?php include('DBconnection.php');?>
			 <?php foreach ($rows as $row ) : ?>

			 <tr>
			 	<td><?php echo  $row['id']; ?></td>
			 	<td><?php echo  $row['first name']; ?></td>
			 	<td><?php echo  $row['second name'];?></td>
			 	<td><?php echo  $row['sex']?></td>
			 	<td><?php echo  $row['email'] ?></td>
			 	<td><?php echo  $row['phone']; ?></td>
			 	<td><?php echo  $row['amount']; ?></td>
			 	<td><?php echo  $row['sport type'] ?></td>
			 	<td><a id="del" href="edit.php?id=<?php echo  $row['id']; ?>">DELETE</a></td>
		
			 </tr>
			<?php endforeach; ?>
	</table>
	</center>

</body>
</html>
