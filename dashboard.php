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
      <center>  <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p><a href="index.php"><b>welcome our page</b></a>
        <br><a href="logout.php">Logout</a></p></center>
    </div>
</body>
</html>
