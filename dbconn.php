<?php
// establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doers";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check for connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>