<?php ob_start(); ?>
<?php include 'connect.php';

$id=$_GET['updateid'];

$sql= "SELECT * FROM `Personal_info` WHERE Id=$id";

$result= mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
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

if(isset($_POST['submit'])){
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

    $sql1 = ("UPDATE `Personal_info` SET FirstName='$fname', LastName='$lname', ZipCode='$zipcode', 
        Address_type='$addr_type',  Company='$company', Phone_number='$phone', Street_address='$street_addr', 
        country='$country', states='$state', city='$city', Email='$email', Pswrd='$password' 
        WHERE Personal_info.Id = $id");

    if ($conn->query($sql1) === true )
    {
        header('location:read.php');
    } else {
        die(mysqli_error($conn));
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
    <title>Update</title>
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
    <div>
        <form method="post">
            <div>
                <label>FirstName </label><br>
                <input type="text" name="fname" value=<?php echo$fname;?>>
            </div><br>
            <div>
                <label>LastName </label><br>
                <input type="text" name="lname" value=<?php echo$lname;?>>
            </div><br>
            <div>
                <label>ZipCode </label><br>
                <input type="text" name="zip_code" value=<?php echo$zipcode;?>>
            </div> <br><hr>
            <div>
                <label>Address type</label><span> * </span><br>
                <select name="addr_type" id="addr_type" value="<?php echo$addr_type;?>">
                    <option value="" >Select Address Type</option>
                    <option value="Commercial Address"<?php if($addr_type=="Commercial Address"){echo"selected";}?>>Commercial Address</option>
                    <option value="Industrial Address"<?php if($addr_type=="Industrial Address"){echo"selected";}?>>Industrial Address</option>
                </select>
            </div><br>
            <div>
                <label>Company</label><span> * </span><br>
                <input type="text" name="company" id="company" value=<?php echo$company;?>>
            </div>
            <div>
                <label>Phone Number</label><span> * </span><br>
                <input type="text" name="phone_num" value=<?php echo$phone;?>>
            </div>
            <div>
                <label>Street Address</label><span> * </span><br>
                <input type="text" name="street_addr" id="street_addr" value="<?php echo$street_addr;?>">
            </div><br>

            <div>
                <label>Country</label><span> * </span><br>
                <select name="country" id="country" value=>
                    <option value="" >Select Country</option>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM countries");
                        while($row = mysqli_fetch_array($result)) {
                            $countrySelected='';
                            if($country==$row['country_id']){$countrySelected= "selected='selected'";}
                        ?>
                            <option value="<?= $row['country_id'];?>" <?= $countrySelected; ?>>
                                <?php echo $row["country"];?>
                            </option>
                        <?php
                        }
                    ?>
                </select><?php echo $country;?>
            </div>
            <div>
                <label>State</label><span> * </span><br>
                <select name="state" id="state" value=>
                    <option value="" >Select State</option>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM states");
                        while($row = mysqli_fetch_array($result)) {
                            $stateSelected='';
                            if($state==$row['state_id']){$stateSelected= "selected='selected'";}
                        ?>
                            <option value="<?= $row['state_id'];?>" <?= $stateSelected; ?>>
                                <?php echo $row["states"];?>
                            </option>
                        <?php
                        }
                    ?>
                </select><?php echo$state;?>
            </div>
            <div>
            <label>City</label><span> * </span><br>
            <select name="city" id="city" value=>
                <option value="" > Select City</option>
                <?php
                        $result = mysqli_query($conn,"SELECT * FROM cities");
                        while($row = mysqli_fetch_array($result)) {
                            $citySelected='';
                            if($city==$row['state_id']){$citySelected= "selected='selected'";}
                        ?>
                            <option value="<?= $row['state_id'];?>" <?= $citySelected; ?>>
                                <?php echo $row["city"];?>
                            </option>
                        <?php
                        }
                    ?>
            </select><?php echo$city;?>
            </div><br><hr>

            <div>
                <label>Email</label><span> * </span><br>
                <input type="text" name="email" value=<?php echo$email;?>>
            </div>
            <div>
                <label>Password</label><span> * </span><br>
                <input type="password" id="pswrd" name="password" value=<?php echo$password;?>>
            </div>
            <div>
                <label>Confirm Password</label><span> * </span><br>
                <input type="password" name="cpassword" value="">
            </div><br>
            <div>
                <input type="checkbox" id="show_pass" name="show_pass">
                <label for="show_pass">Show Password</label>
            </div><br>
            <input type="submit" value="Update" name="submit">
        </form>
    </div>
</body>
<script src="index_update.js"></script>
<script src="script.js"></script>
</html>