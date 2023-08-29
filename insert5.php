<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "admin";

//specify the password - it is empty
$password = "Shin@29041995";

//specify the database name - "my_company"
$database_name = "feedback";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

//sql query to insert a row into sales table
$query = "INSERT INTO feedback (name, waiting, quality,atmosphere,experience,scale,recommendation) VALUES 
('$name', '$waiting', '$quality', '$Environment', '$experience', '$scale', '$improve')";


if (mysqli_query($connection, $query)) {
  echo "record Inserted Successfully";
} else {
  echo "Error:" . mysqli_error($connection);
}

//close the connection
mysqli_close($connection);
?>