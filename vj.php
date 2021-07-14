<?php

$email = $_GET["email"];
$pwd = $_GET["password"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)  {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT *  FROM `userinfo` WHERE `username` LIKE 'vijay' AND `password` LIKE 'test1'";

//echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      include "home.html";
  }
} else {
  echo "Login Failed!";
}
$conn->close();

?>