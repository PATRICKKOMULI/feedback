<?php
require 'conn.php';
if (isset($_POST['search'])) {
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query = mysqli_query($conn, "SELECT * FROM `complement` WHERE date(`time`) BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row = mysqli_num_rows($query);
    if ($row > 0) {
        while ($fetch = mysqli_fetch_array($query)) {
?>
            <tr>
                <td><?php echo $fetch['Date'] ?></td>
                <td><?php echo $fetch['doctors'] ?></td>
                <td><?php echo $fetch['admission'] ?></td>
                <td><?php echo $fetch['nursing'] ?></td>
                <td><?php echo $fetch['medical'] ?></td>
                <td><?php echo $fetch['communication'] ?></td>
                <td><?php echo $fetch['painManagement'] ?></td>
                <td><?php echo $fetch['cafeteria'] ?></td>
                <td><?php echo $fetch['cleanliness'] ?></td>
                <td><?php echo $fetch['security'] ?></td>
                <td><?php echo $fetch['billing'] ?></td>
                <td><?php echo $fetch['patientBeds'] ?></td>
                <td><?php echo $fetch['noiseLevels'] ?></td>
                <td><?php echo $fetch['roomAmbiance'] ?></td>
                <td><?php echo $fetch['amenities'] ?></td>
                <td><?php echo $fetch['discharge'] ?></td>

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
    $query = mysqli_query($conn, "SELECT * FROM `complement`") or die(mysqli_error());
    while ($fetch = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $fetch['Date'] ?></td>
            <td><?php echo $fetch['doctors'] ?></td>
            <td><?php echo $fetch['admission'] ?></td>
            <td><?php echo $fetch['nursing'] ?></td>
            <td><?php echo $fetch['medical'] ?></td>
            <td><?php echo $fetch['communication'] ?></td>
            <td><?php echo $fetch['painManagement'] ?></td>
            <td><?php echo $fetch['cafeteria'] ?></td>
            <td><?php echo $fetch['cleanliness'] ?></td>
            <td><?php echo $fetch['security'] ?></td>
            <td><?php echo $fetch['billing'] ?></td>
            <td><?php echo $fetch['patientBeds'] ?></td>
            <td><?php echo $fetch['noiseLevels'] ?></td>
            <td><?php echo $fetch['roomAmbiance'] ?></td>
            <td><?php echo $fetch['amenities'] ?></td>
            <td><?php echo $fetch['discharge'] ?></td>
        </tr>
<?php
    }
}
?>