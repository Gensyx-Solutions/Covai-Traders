<?php
// db_connection_gst.php - For GST related database connections
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u648102058_covai"; // Assuming 'covai' for now, please update if your GST data is in a different database

// Define customer table details as constants
define('CUSTOMER_TABLE', 'tblmember');
define('CUSTOMER_COLUMNS', 'Mem_No, Mem_Id, Mem_Name, Mem_Fname, Mem_GST, Mem_Mobile');
define('CUSTOMER_ORDER_BY_COLUMN', 'Mem_No'); // Column for ordering
define('CUSTOMER_SEARCH_COLUMNS', ['Mem_Name', 'Mem_Fname', 'Mem_Id']); // Columns for searching

// Create connection
// $conn_gst = mysqli_connect($servername, $username, $password, $dbname);
$conn_gst = null;

// Check connection
if (!$conn_gst) {
    // die("Connection failed: " . mysqli_connect_error());
}
?>