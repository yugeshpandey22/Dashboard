<?php
// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = $_SERVER['PHP_SELF'];
// Normalize path for consistent checking (remove query params if any)
$current_page = strtok($current_page, '?');

// List of pages that do not require login
// Add any public facing pages here
$public_pages = [
    '/dashboard/login.php',
    '/dashboard/sign-up.php'
];

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // If NOT logged in...
    
    // Check if the current page is NOT in the public pages list
    if (!in_array($current_page, $public_pages)) {
        // Redirect to login page
        header("Location: /dashboard/login.php");
        exit();
    }
}
?>
