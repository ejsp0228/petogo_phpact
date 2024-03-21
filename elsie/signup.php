<?php  
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $user_id = random_num(100);
            $query = "insert into user (user_id, username, password) values ('$user_id', '$username', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else
        {
            echo "Please enter some vaild information!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<style type="text/css">
		body {
            font-family: georgia (serif);
            background-color: white;
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #668cff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: orange;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
	</style>

	<div id="form">
		<form method="post">
			<div style="font-size: 30px; margin: 10px">Signup</div>
            <label for="username">Username:</label>
			<input type="text" name="username"><br><br>
            <label for="password">Password:</label>
			<input type="password" name="password"><br><br>
			<button type="submit">Submit</button><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>