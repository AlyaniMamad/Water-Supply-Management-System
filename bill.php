<!DOCTYPE html>
<html>
<head>
	

</head>
<body>
	<form>
		<center>
			<table border="2px" width="1000px" height="300px">
			<th colspan="3"> HIM WATER -MAHUVA</th>
			<?php
					$conn = mysqli_connect("localhost", "root", "", "water");

					
					$qry = mysqli_query($conn,"select * from user where id=".$_GET['id'].";");
				$row = mysqli_fetch_assoc($qry);
			?>
			<tr> 
					<td> Name : <?php echo $row['username'];?></td>
					<td> B.NO : <?php echo $row['id'];?></td>
					<td>Date: <?php ;?></td>
			</tr>
			<tr>
				<td>Types: <?php echo $row['watertype'];?> </td>
				<td>Qty: <?php echo $row['quantity'];?> </td>
				<td>Price </td>
			</tr>
		
			<tr>
				<td></td>
				<td></td>
				<td>Total: <?php echo $row['amt'];?></td>
			</tr>
		</table>
		</center>
		
		
	</form>
</body>
</html>