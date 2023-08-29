<?php
	require 'conn.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `feedback` WHERE date(`time`) BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['ID']?></td>
		<td><?php echo $fetch['name']?></td>
		<td><?php echo $fetch['waiting']?></td>
		<td><?php echo $fetch['quality']?></td>
		<td><?php echo $fetch['atmosphere']?></td>
		<td><?php echo $fetch['experience']?></td>
		<td><?php echo $fetch['scale']?></td>
		<td><?php echo $fetch['recommendation']?></td>
		
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `feedback`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
	<td><?php echo $fetch['ID']?></td>
		<td><?php echo $fetch['name']?></td>
		<td><?php echo $fetch['waiting']?></td>
		<td><?php echo $fetch['quality']?></td>
		<td><?php echo $fetch['atmosphere']?></td>
		<td><?php echo $fetch['experience']?></td>
		<td><?php echo $fetch['scale']?></td>
		<td><?php echo $fetch['recommendation']?></td>
	</tr>
<?php
		}
	}
?>
