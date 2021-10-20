<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"chat");

// Check connection
if (!$conn) {
  die("Connection failed: " );
}

?>