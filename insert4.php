<?php
$servername = "localhost";
$username = "admin";
$password = "Shin@29041995";
$dbname = "feedback";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback (name, waiting, quality,atmosphere,experience,scale,recommendation) VALUES 
('$name', '$waiting', '$quality', '$Environment', '$experience', '$scale', '$improve')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>