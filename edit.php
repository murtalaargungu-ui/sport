 <?php  require 'DBconnection.php'  ?>
 <?php
			$rows = mysqli_query($connect,"select * from book order by id desc") ;

$id= $_GET['id']; 












$query2 = "DELETE from book where id='$id'";

$secondcon= mysqli_query($connect,$query2);
if ($secondcon==true) {
	
	header("location:seconddata.php");

echo "Data deleted successefully";


}else{
	echo "the data not deleted";

	
}



?> 