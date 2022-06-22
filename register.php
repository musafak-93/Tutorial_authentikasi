<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial_authentikasi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];

$sql = "INSERT INTO users (username, password, name)
VALUES ('".$email."', '".$pass."', '".$name."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>