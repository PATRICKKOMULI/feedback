<?php
$servername = "localhost";
$username = "admin";
$password = "Shin@29041995";
$dbname = "feedback";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO feedback (name, waiting, quality,atmosphere,experience,scale,recommendation) VALUES 
('$name', '$waiting', '$quality', '$Environment', '$experience', '$scale', '$improve')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>