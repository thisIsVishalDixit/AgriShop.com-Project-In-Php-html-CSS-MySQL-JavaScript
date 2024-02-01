<?php
$con = mysqli_connect("localhost", "root","", "testing");

if (mysqli_connect_error()) {
    echo "Can not connect to the database";
    exit();
}
else{
    echo "hello";
}
?>
