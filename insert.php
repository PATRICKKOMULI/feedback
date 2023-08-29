<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$server = "localhost";
$user = "admin";
$pass = "Shin@29041995";
$dbname = "feedback";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 

$name = mysqli_real_escape_string($conn, $_POST['name']);
$waiting = mysqli_real_escape_string($conn, $_POST['waiting']);
$quality = mysqli_real_escape_string($conn, $_POST['quality']);
$Environment = mysqli_real_escape_string($conn, $_POST['Environment']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$scale = mysqli_real_escape_string($conn, $_POST['scale']);
$improve = mysqli_real_escape_string($conn, $_POST['improve']);
 
$sql = "INSERT INTO feedback (name, waiting, quality,atmosphere,experience,scale,recommendation) VALUES 
('$name', '$waiting', '$quality', '$Environment', '$experience', '$scale', '$improve')";
 
if($conn->query($sql) === TRUE){
 echo "Your Feedback Has Sucessfully Reached Our Desk";
 
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>