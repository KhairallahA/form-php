<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2 class="header">Home Page</h2>

<form method="GET">
   <?php if(isset($_SESSION['username'])): ?>
 
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <br/>
    <button name="logout" class="btn">Logout</button>

<?php endif ?>

</form>

</body>
</html>