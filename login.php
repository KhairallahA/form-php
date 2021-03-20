<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 class="header">Login</h2>

<form action="login.php" method="POST">
<?php include('errors.php'); ?>
    <div>
        <input type="text" class="input-text" name="username" placeholder="Username:" style="text-transform: capitalize;">
        <?php $_SESSION['username'] = $username ?>
    </div>
    <div>
        <input type="password" class="input-text" name="password" placeholder="Password:" value="<?php echo $password; ?>">
    </div>
    <div>
        <button type="submit" class="btn" name="login"><h3>Login</h3></button>
    </div>
    <br/>
    <p>
    Not yet a member?<a href="register.php">Sing up</a>
    </p>
</form>
</body>
</html>