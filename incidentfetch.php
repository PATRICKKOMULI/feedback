<?php
require 'conn.php';
if (isset($_POST['search'])) {
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query = mysqli_query($conn, "SELECT * FROM `incidents` WHERE date(`time`) BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row = mysqli_num_rows($query);
    if ($row > 0) {
        while ($fetch = mysqli_fetch_array($query)) {
?>
            <tr>
                <td><?php echo $fetch['name'] ?></td>
                <td><?php echo $fetch['incident'] ?></td>
                <td><?php echo $fetch['ward'] ?></td>
                <td><?php echo $fetch['location'] ?></td>
                <td><?php echo $fetch['description'] ?></td>
                <td><?php echo $fetch['actions'] ?></td>
                <td><?php echo $fetch['factors'] ?></td>
                <td><?php echo $fetch['prevention'] ?></td>
                <td><?php echo $fetch['notification'] ?></td>
                <td><?php echo $fetch['documentation'] ?></td>
                <td><?php echo $fetch['additionalDetails'] ?></td>
                <td><?php echo $fetch['reporter'] ?></td>
                <td><?php echo $fetch['witness'] ?></td>
                
            </tr>
        <?php
        }
    } else {
        echo '
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
    }
} else {
    $query = mysqli_query($conn, "SELECT * FROM `incidents`") or die(mysqli_error());
    while ($fetch = mysqli_fetch_array($query)) {
        ?>
        <tr>
        <td><?php echo $fetch['name'] ?></td>
                <td><?php echo $fetch['incident'] ?></td>
                <td><?php echo $fetch['ward'] ?></td>
                <td><?php echo $fetch['location'] ?></td>
                <td><?php echo $fetch['description'] ?></td>
                <td><?php echo $fetch['actions'] ?></td>
                <td><?php echo $fetch['factors'] ?></td>
                <td><?php echo $fetch['prevention'] ?></td>
                <td><?php echo $fetch['notification'] ?></td>
                <td><?php echo $fetch['documentation'] ?></td>
                <td><?php echo $fetch['additionalDetails'] ?></td>
                <td><?php echo $fetch['reporter'] ?></td>
                <td><?php echo $fetch['witness'] ?></td> 
        </tr>
<?php
    }
}
?>