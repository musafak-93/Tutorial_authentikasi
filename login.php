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

// $email = "musa@gmail.com";
// $pass = "password";

$sqlCheck = "SELECT * FROM users WHERE username='".$email."' AND password='".$pass."'";
$result = mysqli_query($conn, $sqlCheck);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["score"]. "<br>";

    //$jsonResult[] = $row;
    $jsonResult = $row;

    echo json_encode($jsonResult);
  }
} else {
  echo "0";
}

mysqli_close($conn);
?>