<?php require_once "connect.php";
 
    $country_id = $_POST["country_id"];
 
    $result = mysqli_query($conn,"SELECT * FROM states where country_id = $country_id");
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["state_id"];?>"><?php echo $row["states"];?></option>
<?php
}
?>