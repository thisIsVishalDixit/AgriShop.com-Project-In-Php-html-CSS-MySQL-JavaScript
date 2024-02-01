<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container">
        <?php
        session_start(); // Start the session
        if (isset($_SESSION['AdminLoginId'])) {
            echo '<h2>Welcome Admin</h2>';
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '
            <div class="myform">
                <form method="POST" action="login.php">
                    <h2>Admin Panel</h2>
                    <input type="text" placeholder="Admin Name" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
            <div class="image">
                <img src="Ad.png" width="300px">
            </div>';
        }
        ?>
    </div>
</body>

</html>
