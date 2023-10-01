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

// Select data from the 'form' table
$sql = "SELECT `First Name`, `Last name`, `Email`, `Phone no`, `State`, `City`, `Country`, `Pincode` FROM `form`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "First Name: " . $row["First Name"] . "<br>";
    echo "Last Name: " . $row["Last name"] . "<br>";
    echo "Email: " . $row["Email"] . "<br>";
    echo "Phone no: " . $row["Phone no"] . "<br>";
    echo "State: " . $row["State"] . "<br>";
    echo "City: " . $row["City"] . "<br>";
    echo "Country: " . $row["Country"] . "<br>";
    echo "Pincode: " . $row["Pincode"] . "<br>";
    echo "<hr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
