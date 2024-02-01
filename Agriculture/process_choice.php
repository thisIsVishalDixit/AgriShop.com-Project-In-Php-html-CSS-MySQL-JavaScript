<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["user_type"];

    if ($userType === 'admin') {
        // Redirect admin to admin.php
        header('location: Admin/admin.php');
        exit();
    } else {
        // Redirect regular user to signin.php
        header('location: signin.html');
        exit();
    }
}
?>
