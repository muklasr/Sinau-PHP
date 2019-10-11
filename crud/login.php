<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="admin"){
        $_SESSION['is_loggedin'] = true;
        $_SESSION['username'] = $username;
    } else {
        echo "invalid credential";
        exit();
    }
}

if(isset($_SESSION['is_loggedin'])){
    header("location: home.php");
} else {
    echo "Belum login.";
}

// $_SESSION['nama'] = "saya";
// $_SESSION['nama1'] = 1;
// $_SESSION['nama2'] = true;
// $_SESSION['nama3'] = array(1,2,3,4,5,6,9999);
// $_SESSION['ar'] = array('satu'=>1, 2=>'dua');
// $_SESSION['namaN'] = "sayaN";
// print_r($_SESSION);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Login</title>
 </head>
 <body>
 <h1>LOGIN</h1>
     <form method="POST">
        Username : <input type="text" name="username"><br>
        Password : <input type="text" name="password"><br>
        <input type="submit" name="login" value="Login">
     </form>
 </body>
 </html>