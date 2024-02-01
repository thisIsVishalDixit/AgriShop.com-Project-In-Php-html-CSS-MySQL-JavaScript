<?php
include 'connection.php';

// Check if the form is submitted to add a new product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
    // Include your database connection code here

    // Retrieve form data
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Perform the SQL query to insert the new product into the database
    $sql = "INSERT INTO products (item_name, price, image_url) VALUES ('$item_name', $price, '$image_url')";

    // Execute the query
    mysqli_query($con, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="header">
                   
                </div>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pay Mode</th>
                            <th scope="col">Date</th> <!-- Added the Date column -->
                            <th scope="col">Orders</th>
                            <th scope="col">Actions</th> <!-- Added Actions column -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM order_manager";
                        $user_result = mysqli_query($con, $query);
                        while ($user_row = mysqli_fetch_assoc($user_result)) {
                            echo "    
                            <tr>
                                <td>{$user_row['Order_id']}</td>
                                <td>{$user_row['Full_Name']}</td>
                                <td>{$user_row['Phone_No']}</td>
                                <td>{$user_row['Address']}</td>
                                <td>{$user_row['Pay_Mode']}</td>
                                <td>{$user_row['dat']}</td> <!-- Display the 'dat' column -->
                                <td>
                                    <table class='table table-dark'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>Item Name</th>
                                                <th scope='col'>Price</th>
                                                <th scope='col'>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>";

                            $user_order = "SELECT * FROM user_orders WHERE Order_id='{$user_row['Order_id']}'";
                            $order_result = mysqli_query($con, $user_order);
                            while ($order_row = mysqli_fetch_assoc($order_result)) {
                                echo "
                                <tr>
                                    <td>{$order_row['Item_Name']}</td>
                                    <td>{$order_row['Price']}</td>
                                    <td>{$order_row['Quantity']}</td>
                                </tr>";
                            }

                            echo "
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <form action='update_order.php' method='post'>
                                        <input type='hidden' name='order_id' value='{$user_row['Order_id']}'>
                                        <button type='submit' name='update'>Update</button>
                                    </form>
                                    <form action='delete_order.php' method='post'>
                                        <input type='hidden' name='order_id' value='{$user_row['Order_id']}'>
                                        <button type='submit' name='delete'>Delete</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
