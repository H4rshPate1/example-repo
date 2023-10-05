<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $pass = stripslashes($_REQUEST['pswrd']);
        $pass = mysqli_real_escape_string($con, $pass);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, pswrd, email, phone, create_datetime)
                     VALUES ('$username', '$pass', '$email', '$phone', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post" onsubmit="return validateform()">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" id="email" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" id="phone" name="phone" placeholder="Phone Number">
        <input type="password" class="login-input" id="pswrd" name="pswrd" placeholder="Password">
        <input type="submit" id="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
<script src="reg.js"></script>
</body>
</html>