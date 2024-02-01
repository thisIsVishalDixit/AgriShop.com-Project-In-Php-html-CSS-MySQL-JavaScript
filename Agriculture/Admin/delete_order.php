<?php
include 'connection.php';

if (isset($_POST['delete'])) {
    $order_id = $_POST['order_id'];

    // Perform the delete operation based on the $order_id
    $delete_query = "DELETE FROM order_manager WHERE Order_id = '$order_id'";
    $delete_result = mysqli_query($con, $delete_query);

    if ($delete_result) {
        echo "Order deleted successfully!";
    } else {
        echo "Error deleting order: " . mysqli_error($con);
    }
} else {
    header("location: admin_panel.php");
    exit();
}
?>
