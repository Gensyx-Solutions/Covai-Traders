<?php
$servername = "localhost";//"191.101.79.103"; // Or your database server
$username = "root";
$password = "";
$dbname = "covai";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = null;

// Check connection
if (isset($conn) && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
