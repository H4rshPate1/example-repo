<?php include 'connect.php';

// $sql = 'CREATE TABLE Personal_info (
//   Id int NOT NULL AUTO_INCREMENT,
//   FirstName varchar(20),
//   LastName varchar(255),
//   ZipCode varchar(20),
//   PRIMARY KEY (Id)
// );'; 
// if(mysqli_query( $conn,$sql)){  
//   echo "Table 1 created successfully." . "<br>";
// }else{  
//   echo "Error creating table 1: ".mysqli_error($conn) . "<br>";
// } 
 
// $sql = "CREATE TABLE Address_info (
//   A_id INT NOT NULL AUTO_INCREMENT,
//   Address_type VARCHAR(30),
//   Company VARCHAR(30),
//   Phone_number VARCHAR(10),
//   -- Country VARCHAR(15),
//   -- States VARCHAR(15),
//   -- City VARCHAR(15),
//   Street_address VARCHAR(30),
//   UNIQUE KEY(A_id) 
//   -- FOREIGN KEY(A_id) REFERENCES Personal_info(Id)
// )";
// if(mysqli_query( $conn,$sql)){  
//   echo "Table 2 created successfully." . "<br>"; 
// }else{  
//   echo "Error creating table 2: ".mysqli_error($conn) . "<br>";
// } 

// $sql = "CREATE TABLE Signin_info (
//   S_id INT NOT NULL AUTO_INCREMENT,
//   Email VARCHAR(30),
//   Pswrd VARCHAR(10),
//   C_pswrd VARCHAR(10),
//   UNIQUE KEY(S_id)
//   -- FOREIGN KEY(S_id) REFERENCES Personal_info(Id)
// )";
// if(mysqli_query( $conn,$sql)){  
//   echo "Table 3 created successfully." . "<br>";  
// }else{  
//   echo "Error creating table 3: ".mysqli_error($conn) . "<br>";
// } 




// $sql = "CREATE TABLE countries (
//     c_id INT AUTO_INCREMENT,
//     country VARCHAR(255) ,
//     UNIQUE KEY(c_id)
// )";
// if(mysqli_query( $conn,$sql)){  
//   echo "Table country created successfully." . "<br>";  
// }else{  
//   echo "Error creating table country: ".mysqli_error($conn) . "<br>";
// } 
// $sql = "CREATE TABLE states (
//     -- id INT AUTO_INCREMENT PRIMARY KEY,
//     st_id INT NOT NULL AUTO_INCREMENT,
//     states VARCHAR(255) ,
//     -- FOREIGN KEY (country_id) REFERENCES countries(id)
//     UNIQUE KEY(st_id)
// )";
// if(mysqli_query( $conn,$sql)){  
//   echo "Table state created successfully." . "<br>";  
// }else{  
//   echo "Error creating table state: ".mysqli_error($conn) . "<br>";
// }

// $sql = "CREATE TABLE cities (
//     -- id INT AUTO_INCREMENT PRIMARY KEY,
//     ct_id INT NOT NULL AUTO_INCREMENT,
//     city VARCHAR(255) ,
//     -- FOREIGN KEY (state_id) REFERENCES states(id)
//     UNIQUE KEY(ct_id)
// )";
// if(mysqli_query( $conn,$sql)){  
//   echo "Table city created successfully." . "<br>";  
// }else{  
//   echo "Error creating table city: ".mysqli_error($conn) . "<br>";
// }

// mysqli_close($conn); 
?>