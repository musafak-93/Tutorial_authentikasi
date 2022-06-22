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

$sqlCheck = "SELECT name, score FROM users";
$result = mysqli_query($conn, $sqlCheck);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $jsonResult[] = $row;
  }

  echo json_encode($jsonResult);
} else {
  echo "0";
}

mysqli_close($conn);
?>