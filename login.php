<?php 
session_start();

if(isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "varia@123", "test");
    $name = $_POST['name'];
    $password = $_POST['pwd'];

    
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/login.css"/>
<title>Login - CozyCom</title>
</head>
<body>
  <div class="login-container">
    <div class="header">Welcome to Cozycom!!</div>
    <form action="" method="post">
      <input type="text" class="input" placeholder="Username" name="name">

      <input type="password" class="input" placeholder="Password" name="pwd">

      <input type="submit" class="login-button" value="Login" name="submit"/><br><br>

      <span>Don't have account <a href="register.php">Register</a> <a href="index.php"> Home </a></span>
    </form>
  </div>
</body>
</html>
