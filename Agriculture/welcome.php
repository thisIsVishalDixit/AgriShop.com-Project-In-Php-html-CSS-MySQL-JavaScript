<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Website</title>
    <link rel="stylesheet" href="path-to-ion-icons-style.css">
    <style>
        body {
            user-select: none;
            overflow-y: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: hsl(218deg 50% 91%);
            height: 100vh;
            margin: 0;
        }

        .screen-1 {
            background: hsl(213deg 85% 97%);
            padding: 2em;
            display: flex;
            flex-direction: column;
            border-radius: 30px;
            box-shadow: 0 0 2em hsl(231deg 62% 94%);
            gap: 2em;
            width: 300px;
            margin-top: -3em;
            text-align: center;
        }

        .logo {
            margin-top: -6em;
        }

       

        
        .ion-icon {
            color: hsl(0deg 0% 30%);
            margin-bottom: -.2em;
        }

        .show-hide {
            margin-right: -5em;
        }

        .login {
            padding: 1em;
            background: green;
            color: white;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
        }

        .footer {
            display: flex;
            font-size: 0.7em;
            color: hsl(0deg 0% 37%);
            gap: 14em;
            padding-bottom: 10em;
            span {
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <div class="screen-1">
       
        <div class="container"><br><br><br>
            <h1>Welcome to the Website</h1><br><br><br>
            
            <form action="process_choice.php" method="post">
                <label for="admin">Are you an admin or a user?</label><br><br><br><br>
                <input type="radio" id="admin" name="user_type" value="admin" required>
                <label for="admin">Admin</label>
                <input type="radio" id="user" name="user_type" value="user" required>
                <label for="user">User</label><br><br><br><br>
                <button class="login" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
