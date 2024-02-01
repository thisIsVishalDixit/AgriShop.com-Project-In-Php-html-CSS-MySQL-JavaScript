<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $order_id = $_POST['order_id'];
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    // Retrieve other updated order details

    // Perform the update operation based on the received data
    $update_query = "UPDATE order_manager SET Full_Name = '$full_name', Phone_No = '$phone_no', Address = '$address' WHERE Order_id = '$order_id'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        echo "Order updated successfully!";
        header("location: admin_panel.php"); // Redirect to admin.php
        exit();
    } else {
        echo "Error updating order: " . mysqli_error($con);
    }
} else {
    header("location: update_order.php");
    exit();
}
?>
