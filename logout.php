<?php
session_start();
session_unset(); // Unset all of the session variables
session_destroy(); // Destroy the session
header("Location: SalesManagement"); // Redirect to the login page (index.php via .htaccess)
exit();
?>