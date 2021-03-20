<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2 class="header">Register</h2>
<form method="POST" action="register.php">
    <?php include('errors.php'); ?>

    <div>
        <input type="text" class="input-text"  name="username" placeholder="Username:" style="text-transform: capitalize;">
        <?php $_SESSION['username'] = $username ?>
    </div>
    <div>
        <input type="email"  class="input-text" name="email" placeholder="Email:">
    </div>
    <div>
        <input type="password" class="input-text" name="password_1" placeholder="Password:">
    </div>
    <div>
        <input type="password" class="input-text" name="password_2" placeholder="Confirm password:">
    </div>
    <div>
        <button type="submit" name="register" class="btn"><h3>Register</h3></button>
    </div>
    <p>
    Already a member<a href="login.php">Login</a>
    </p>
</form>
</body>
</html>