<?php include '../php/connection.php'; session_start(); ?>
<?php

if(isset($_GET['logout'])){
    session_destroy();
    echo "Logging out...";
    echo "<meta http-equiv='refresh' content='1; url=../pages/login.php'>";
}

if(!isset($_SESSION['logged'])){
    echo "First Log in...";
    echo "<meta http-equiv='refresh' content='1; url=../pages/login.php'>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<a href="dashboard.php?logout">Log out</a>
    
</body>
</html>