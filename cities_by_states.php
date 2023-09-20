<?php require_once "connect.php";
 
    $state_id = $_POST["state_id"];
// echo "SELECT * FROM cities where state_id = $state_id";die();
    $result = mysqli_query($conn,"SELECT * FROM cities where state_id = $state_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["state_id"];?>"><?php echo $row["city"];?></option>
<?php
}
?>