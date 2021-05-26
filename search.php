<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <form action="search2.php" method="post" enctype="multipart/form-data">
            Search an image:<br>
        <input type="text" name="search"><br>
        <input type="submit" value="Search" name="submit">
        </form>

        <p><a href="logout.php">Logout</a></p>
      
    </div>
</body>
</html>