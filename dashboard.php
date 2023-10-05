<?php
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
        <p>You are now user dashboard page.</p>
        <!-- <p><a href="logout.php">Logout</a></p> -->
    <?php ob_start(); ?>
<?php include 'connect.php'; ?>
<!-- <body> -->
    <div class="container">
    <button> <a href="registration.php">Register</a></button>
        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Phone Number</th>
                    <th>Email</th> 
                    <th>Password</th> 

                    <th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>
<?php
         $sql ="SELECT * FROM `users`";  

            $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $pass = $row['pswrd'];

                        echo'<tr>
                            <th>' . $id . '</th>
                            <td>' . $username . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $email . '</td>
                            <td>' . $pass . '</td>

                            <td>    
                                <button> <a href="reg_update.php? updateid='.$id.'"> Update </a></button>
                                <button> <a href="reg_delete.php? deleteid='.$id.'"> Delete </a></button> 
                            </td>
                        </tr>';
                    }
                } else {
                    die(mysqli_error($conn));
                }
?>
            </tbody>
        </table>
    </div>
    </body>
    <p><a href="logout.php">Logout</a></p>
    </div>
</html>