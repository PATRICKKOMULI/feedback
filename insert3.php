
<?php
$servername = "localhost";
$username = "admin";
$password = "Shin@29041995";
$dbname = "feedback";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback (name, waiting, quality,atmosphere,experience,scale,recommendation) VALUES 
('$name', '$waiting', '$quality', '$Environment', '$experience', '$scale', '$improve')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>