<?php
// Define database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}


    // Get form data
    $name = $_POST["name"];
    $incident = $_POST["incident"];
    $ward = $_POST["ward"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    $actions = $_POST["actions"];
    $factors = $_POST["factors"];
    $prevention = $_POST["prevention"];
    $notification = $_POST["notification"];
    $documentation = $_POST["documentation"];
    $additonalDetails = $_POST["additionalDetails"];
    $reporter = $_POST["reporter"];
    $witness = $_POST["witness"];
    

    // Prepare SQL statement to insert data into table
    $sql = "INSERT INTO incidents (name, incident, ward, location, description, actions, factors, prevention, notification, documentation, additionalDetails, reporter, witness) 
            VALUES ('$name', '$incident', '$ward', '$location', '$description', '$actions', '$factors', '$prevention', '$notification', '$documentation', '$aditionalDetails', '$reporter', '$witness')";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        header("location: incidents.php");
        // echo "Complaint submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


// Close database connection
$conn->close();
