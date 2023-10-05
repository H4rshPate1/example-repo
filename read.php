<?php ob_start(); ?>
<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <div class="container">
    <button> <a href="index.php">Add User</a></button>
        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Zip Code</th>

                    <th>Address Type</th>
                    <th>Company</th>
                    <th>Phone Number</th>
                    <th>Street Address</th>

                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>

                    <th>Email</th>
                    <th>Password</th> 

                    <th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>
<?php
         $sql ="SELECT * FROM `Personal_info` ";  

            $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['Id'];
                        $fname = $row['FirstName'];
                        $lname = $row['LastName'];
                        $zipcode = $row['ZipCode'];

                        $addr_type = $row['Address_type'];
                        $company = $row['Company'];
                        $phone = $row['Phone_number'];
                        $street_addr = $row['Street_address'];
                        
                        $country = $row['country'];
                        $state = $row['states'];
                        $city = $row['city'];
                        
                        $email = $row['Email'];
                        $password = $row['Pswrd'];

                        echo'<tr>
                            <th>' . $id . '</th>
                            <td>' . $fname . '</td>
                            <td>' . $lname . '</td>
                            <td>' . $zipcode . '</td>

                            <td>' . $addr_type . '</td>
                            <td>' . $company . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $street_addr . '</td>

                            <td>' . $country . '</td>
                            <td>' . $state . '</td>
                            <td>' . $city . '</td>

                            <td>' . $email . '</td>
                            <td>' . $password . '</td>
                            <td>    
                                <button> <a href="update.php? updateid='.$id.'"> Update </a></button>
                                <button> <a href="delete.php? deleteid='.$id.'"> Delete </a></button> 
                            </td>
                        </tr>';
                    }
                } else {
                    die(mysqli_error($conn));
                }
?>
<?php ob_flush(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>