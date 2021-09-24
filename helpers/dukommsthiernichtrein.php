<?php 
// Start the session
session_start();

// Check if user is authorized
if (isset($_SESSION['session_status']) && $_SESSION['session_status'] == true) {
    $username = $_SESSION['session_name'];
} else {
    header("location: ../../../views/login.php");
}
?>