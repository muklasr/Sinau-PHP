<?php
    session_start();
    if(!isset($_SESSION['is_loggedin'])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <h1>HOME</h1>
    <a href="logout.php">Logout</a>
</body>
</html>