<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $order_id = $_POST['order_id'];

    // Retrieve the order details based on the $order_id
    $query = "SELECT * FROM order_manager WHERE Order_id = '$order_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $order_row = mysqli_fetch_assoc($result);

        // Display a form with the current order details
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Update Order</title>
            <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            h2 {
                color: #333;
                text-align: center;
                margin-top: 20px;
                font-size: 24px;
            }
            form {
                max-width: 400px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            label {
                display: block;
                margin-bottom: 8px;
                color: #555;
                font-size: 16px;
            }
            input {
                width: 100%;
                padding: 12px;
                margin-bottom: 16px;
                box-sizing: border-box;
                font-size: 16px;
            }
            button {
                background-color: #4caf50;
                color: #e8edf2;
                padding: 14px 18px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 18px;
            }
           
            button:hover {
                background-color: #0056b3;
            }
        </style>
        </head>
        <body>
            <h2>Update Order</h2>
            <form action='update_order_process.php' method='post'>
                <input type='hidden' name='order_id' value='{$order_row['Order_id']}'>
                <label for='full_name'>Customer Name:</label>
                <input type='text' id='full_name' name='full_name' value='{$order_row['Full_Name']}' required>
                <label for='phone_no'>Phone No:</label>
                <input type='text' id='phone_no' name='phone_no' value='{$order_row['Phone_No']}' required>
                <label for='address'>Address:</label>
                <input type='text' id='address' name='address' value='{$order_row['Address']}' required>
                <!-- Add other order details inputs here -->
                <button type='submit' name='submit'>Update Order</button>
            </form>
        </body>
        </html>";
    } else {
        echo "Order not found!";
    }
} else {
    header("location: admin_panel.php");
    exit();
}
?>
