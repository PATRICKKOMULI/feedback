<?php
session_start();
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
    $date = $_POST["date"];
    $doctors = $_POST["doctors"];
    $admission = $_POST["admission"];
    $nursing = $_POST["nursing"];
    $medical = $_POST["medical"];
    $communication = $_POST["communication"];
    $painManagement = $_POST["painManagement"];
    $cafeteria = $_POST["cafeteria"];
    $cleanliness = $_POST["cleanliness"];
    $security = $_POST["security"];
    $billing = $_POST["billing"];
    $patientBeds = $_POST["patientBeds"];
    $noiseLevels = $_POST["noiseLevels"];
    $roomAmbiance = $_POST["roomAmbiance"];
    $amenities = $_POST["amenities"];
    $discharge = $_POST["discharge"];

    // Prepare SQL statement to insert data into table
    $sql = "INSERT INTO tbl_complaint (date, doctors, admission, nursing, medical, communication, painManagement, cafeteria, cleanliness, security, billing, patientBeds, noiseLevels, roomAmbiance, amenities, discharge) 
            VALUES ('$date', '$doctors', '$admission', '$nursing', '$medical', '$communication', '$painManagement', '$cafeteria', '$cleanliness', '$security', '$billing', '$patientBeds', '$noiseLevels', '$roomAmbiance', '$amenities', '$discharge')";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        header("location: Complaints.php");
        // echo "Complaint submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


// Close database connection
$conn->close();
