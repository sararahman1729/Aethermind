<?php
session_start();
session_destroy(); // Destroy the session
header("Location: welcome.php"); // Redirect to the login page after logout
exit;
?>
