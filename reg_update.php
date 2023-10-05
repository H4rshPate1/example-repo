<?php ob_start(); ?>
<?php include 'db.php';

$id=$_GET['updateid'];

$sql= "SELECT * FROM `users` WHERE id=$id";

$result= mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
$username = $row['username'];
$email = $row['email'];
$phone = $row['phone'];
$pass = $row['pswrd'];

if(isset($_POST['submit'])){
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pswrd'];

    $sql1 = ("UPDATE `users` SET username='$username', phone='$phone', email='$email', pswrd='$pass' 
        WHERE id = $id");

    if ($con->query($sql1) === true )
    {
        header('location:dashboard.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<?php ob_flush(); ?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <title>Update</title>
<style>
    form{
        width: 600px;
        margin: 100px auto;
    }
</style>
</head>
<body>
    <div>
        <form method="post">
            <h1 class="login-title" style="color: #fff;">Update form</h1>
            <input type="text" class="login-input" name="username"             value=<?php echo$username;?>>
            <input type="text" class="login-input" id="email" name="email"     value=<?php echo$email;?>>
            <input type="text" class="login-input" id="phone" name="phone"     value=<?php echo$phone;?>>
            <input type="password" class="login-input" id="pswrd" name="pswrd" value=<?php echo$pass;?>>
            <input type="checkbox" id="show_pass" name="show_pass">
            <label for="show_pass">Show Password</label><br><br>
            <input type="submit" id="submit" name="submit" value="Update" class="login-button">
            <!-- <p class="link"><a href="login.php">Click to Login</a></p> -->
        </form>
    </div>
    <script src="reg.js"></script>
</body>
</html>