<?php
// Establish a connection to the database (replace with your actual database credentials)
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "eventdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process pilot registration
$pilotName = $_POST['pilotName'];
$pilotEmail = $_POST['pilotEmail'];
$sql = "INSERT INTO registrations (name, email, role) VALUES ('$pilotName', '$pilotEmail', 'Pilot')";

if ($conn->query($sql) === TRUE) {
    echo "Pilot registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Process non-pilot registration
$nonPilotName = $_POST['nonPilotName'];
$nonPilotEmail = $_POST['nonPilotEmail'];
$sql = "INSERT INTO registrations (name, email, role) VALUES ('$nonPilotName', '$nonPilotEmail', 'Non-Pilot')";

if ($conn->query($sql) === TRUE) {
    echo "Non-Pilot registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>