<?php  
// $host = 'db';  
// $user = 'wordpress';  
// $pass = 'wordpress'; 
// $database = 'wordpress'; 
$conn = mysqli_connect("db", "wordpress", "wordpress", "wordpress");  

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}  
// if(!$conn) {  
//     die("Could not connect: " . mysqli_connect_error($conn));  
?>  