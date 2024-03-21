<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to our Store, NAKAMA!</title>
    <style>
        .logout-link {
            position: fixed;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
			font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Welcome to our Store, NAKAMA!</h1>

    <div class="logout-link">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>