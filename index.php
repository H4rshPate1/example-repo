<?php ob_start(); ?>
<?php include_once 'connect.php';
 
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $zipcode = $_POST['zip_code'];
    $addr_type = $_POST['addr_type'];
    $company = $_POST['company'];
    $phone = $_POST['phone_num'];
    $street_addr = $_POST['street_addr'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql1 = "INSERT INTO Personal_info (country, states, city, FirstName, LastName, ZipCode, Address_type, 
    Company, Phone_number, Street_address, Email, Pswrd) VALUES ('$country', '$state', '$city', '$fname', 
    '$lname', '$zipcode', '$addr_type', '$company', '$phone', '$street_addr', '$email', '$password')";

    if ($conn->query($sql1) === true )
     {
        header("location: main.php");
        // echo "New records created successfully";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Form</title>
<style>
    .container{
        padding-inline: 20px;
    }
    span{
        color: rgb(224, 49, 49);
    }
    select{
        width: 8%;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>create new customer account</h2>
        <form class="form_content" action="" method="post" onsubmit="return validateform()">
            <div class="p_info">
                <h4>Personal information</h4><hr>
                <label for="firstname">First Name</label><span class="ferror">* <?php echo $fnameErr;?></span><br>
                <input type="text" name="fname" id="firstname">
            </div>
            <div class="p_info ">
                <label for="lastname">Last Name</label><span class="lerror">* <?php echo $lnameErr;?><br>
                <input type="text" name="lname" id="lastname">
            </div>
            <div class="p_info">
                <label for="zipcode">Zip code</label><span class="zerror">* <?php echo $zip_codeErr;?></span><br>
                <input type="text" name="zip_code" id="zipcode">
            </div>
            <div class="addr_info">
                <h4>Address information</h4><hr>
                <label for="addr_type">Address type</label><span> * </span><br>
                <select name="addr_type" id="addr_type">
                    <option value="" >Select Address Type</option>
                    <option value="Commercial Address"  >Commercial Address</option>
                    <option value="Industrial Address" >Industrial Address</option>
                </select>
            </div><br>
            <div class="addr_info">
                <label for="company">Company</label><span> * </span><br>
                <input type="text" name="company" id="company">
            </div>
            <div class="addr_info">
                <label for="phone">Phone Number</label><br>
                <input type="text" name="phone_num" id="phone">
            </div>
            <div class="addr_info">
                <label for="st_addr">Street Address</label><span> * </span><br>
                <input type="text" name="street_addr" id="street_addr">
            </div><br>
            <div class="">
                <label for="country">Country</label><span> * </span><br>
                <select name="country" id="country">
                    <option value="" >Select Country</option>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM countries");
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['country_id'];?>"><?php echo $row["country"];?></option>
                        <?php
                        }
                    ?>
                </select>
            </div>
            <div class="">
                <label for="state">State</label><span> * </span><br>
                <select name="state" id="state">
                    <option value="" >Select State</option>
                </select>
            </div>
            <div class="">
                <label for="city">City</label><span> * </span><br>
                <select name="city" id="city">
                    <option value="" > Select City</option>
                </select>
            </div>
            <div class="signin_info">
                <h4>Sign-in information</h4><hr>
                <label for="mail">Email</label><br>
                <input type="text" name="email" id="mail">
            </div>
            <div class="signin_info">
                <label for="pswrd">Password</label><br>
                <input type="password" name="password" id="pswrd">
            </div>
            <div class="signin_info">
                <label for="c_pswrd">Confirm Password</label><br>
                <input type="password" name="cpassword" id="c_pswrd">
            </div><br>
            <div class="signin_info">
                <input type="checkbox" name="show_pass" id="show_pass">
                <label for="show_pass">Show Password</label>
            </div><br>
            <input type="submit" name="submit" id="submit" value="submit">
        </form>
    </div>
</body>
<script src="index_update.js"></script>
<script src="script.js"></script>
</html>
<?php ob_flush(); ?>