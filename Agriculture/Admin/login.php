<?php
session_start(); // Start the session if it's not already started

$email = $_POST['email'];
$password = $_POST['password'];
$con = new mysqli("localhost", "root", "", "testing");

if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();

        if ($data['password'] === $password) {
            $_SESSION['AdminLoginId'] = $data['admin_id']; // Store admin_id in the session
            header('location: admin_panel.php');
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or password</h2>";
    }
}
?>
