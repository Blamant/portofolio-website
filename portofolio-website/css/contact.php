<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$host = "sql313.epizy.com";
$dbUsername = "epiz_26975205";
$dbPassword = "!natMdGjvC5kWD";
$dbname = "epiz_26975205_portofolio_database";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (name, email, message)
VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>