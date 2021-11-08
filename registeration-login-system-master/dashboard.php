<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    
</head>
<style>
    body{
        background:url('oobg.png')
    }
</style>
<body>
    <div class="form" align="center">
      <h1>  <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>  </h1>
    </div>
</body>
</html>
