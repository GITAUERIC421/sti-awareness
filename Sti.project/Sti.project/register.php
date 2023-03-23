<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="form-cont">
            <form action="" method="post">
                <h3>Register now</h3>
                <input type="text" name="name" required placeholder="Enter your name">
                <input type="emaill" name="email" required placeholder="Enter your email">
                <input type="password" name="password" required placeholder="Enter your password">
                <input type="password" name="cpassword" required placeholder="Confirm your password">
                <select name="user_type">
                    <option value="user">User</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="submit" name="submit" value="REGISTER" class="form-btn">
                <p>Already have an accont? <a href="login.php">Login Now</a></p>
            </form>
        </div>
        
    </body>
</html>
