<?php ob_start(); ?>
<?php include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = ("DELETE from `Personal_info` WHERE id = $id");

    $result = mysqli_query($conn, $sql);
        if ($result){
            header ('Location:read.php');
        } 
        else{
            die(mysqli_error($conn));
        }
    }
?>
<?php ob_flush(); ?>