<?php
$servername = "localhost";
$username = "shivanshi";
$password = "123456";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Define the data to be inserted
$firstName = "Mira";
$lastName = "Kumari";
$email = "mk@gmail.com";
$phoneNo = "9876543210";
$state = "Maharashtra";
$city = "Pune";
$country = "India";
$pincode = "411038";

// Prepare the SQL statement
$sql = "INSERT INTO `form` (`First Name`, `Last name`, `Email`, `Phone no`, `State`, `City`, `Country`, `Pincode`)
VALUES ('$firstName', '$lastName', '$email', '$phoneNo', '$state', '$city', '$country', '$pincode')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
