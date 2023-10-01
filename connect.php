<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $pincode = $_POST["pincode"];

    
    // Perform database connection (replace with your actual database credentials)
    $dbHostname = "localhost";
    $dbUsername = "shivanshi";
    $dbPassword = "123456";
    $dbName = "student";

    // Create a database connection
    $conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define your SQL query to insert data into the table
    $sql = "INSERT INTO form(`First Name`, `Last name`, `Phone No`, `Email`, `State`, `City`, `Country`, `PinCode`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and execute the query using prepared statements
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $firstName, $lastName, $phoneNumber, $email, $state, $city, $country, $pincode);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
