<?php
include 'connection.php';
// session_start();
// session_regenerate_id(true);            //find all time new session id

// Commented out these lines because data does not fetch from the testing database.

// if(!isset($_SESSION['AdminLoginId']))
// {
//     header("location: admin.php");
// }

// Commented out these lines because data does not fetch from the testing database.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
    
        body {
            margin: 0;
        }

        div.header {
            color: #f0f0f0;
            font-family: poppins;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            background-color: #1c1c1e;
        }

        div.header button {
            background-color: green;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid white;
        }

        div.header button:hover {
            color: red;
        }
    </style>
</head>
<body>
<div class="header">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" name="Logout">Log Out</button>
    </form>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-dark"; border="black" margin: 2px>
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Address</th>
                        <th scope="col">Pay Mode</th>
                        <th scope="col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM order_manager";
                    $user_result = mysqli_query($con, $query);
                    while ($user_row = mysqli_fetch_assoc($user_result)) {
                        ?>
                        <tr>
                            <td><?php echo $user_row['Order_id']; ?></td>
                            <td><?php echo $user_row['Full_Name']; ?></td>
                            <td><?php echo $user_row['Phone_No']; ?></td>
                            <td><?php echo $user_row['Address']; ?></td>
                            <td><?php echo $user_row['Pay_Mode']; ?></td>
                            <!-- You had a syntax error here; removed the extra semicolon -->
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
if (isset($_POST['Logout'])) {
    session_destroy();
    header("location: admin.php");
}
?>
</body>
</html>
