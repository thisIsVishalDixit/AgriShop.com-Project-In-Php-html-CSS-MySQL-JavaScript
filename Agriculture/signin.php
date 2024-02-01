<?php 
session_start();

$username = "root";
$password = "";
$server = "localhost";
$db = "testing";

$con = mysqli_connect($server, $username, $password, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['user'];
    $password = $_POST['pass'];

    $q = "select * from signup where username='$name' && password='$password'";
    $res = mysqli_query($con, $q);
    $num = mysqli_num_rows($res);

    if ($num == 1) {
        $_SESSION['username'] = $name;
        header('location:index.php');
    } else {
        echo "<script> alert('Data Not Matched') </script>";
    }
}
?>
