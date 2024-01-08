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

// Process T-Shirt purchase
if (isset($_POST['shirtQuantity'])) {
    $shirtQuantity = $_POST['shirtQuantity'];
    $sql = "INSERT INTO cart (item, quantity, price) VALUES ('T-Shirt', $shirtQuantity, 20)";

    if ($conn->query($sql) === TRUE) {
        echo "T-Shirt added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Process Meal Ticket purchase
if (isset($_POST['mealQuantity'])) {
    $mealQuantity = $_POST['mealQuantity'];
    $sql = "INSERT INTO cart (item, quantity, price) VALUES ('Meal Ticket', $mealQuantity, 10)";

    if ($conn->query($sql) === TRUE) {
        echo "Meal Ticket added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
