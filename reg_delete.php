<?php ob_start(); ?>
<?php include 'db.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = ("DELETE from `users` WHERE id = $id");

    $result = mysqli_query($con, $sql);
        if ($result){
            header ('Location:dashboard.php');
        } 
        else{
            die(mysqli_error($con));
        }
    }
?>
<?php ob_flush(); ?>