<?php
$title = "A Simple CRUD App";
include '../layout/header.php';
?>

<form method="post" action="">
    <input type="text" name="fname" placeholder="First Name:" required> <br>
    <input type="text" name="lname" placeholder="Last Name:" required> <br>
    <input type="text" name="city" placeholder="City:" required> <br>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select>
    <input type="submit" value="Submit" name="Submit">
</form>

<?php
if(isset($_POST["Submit"])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$groupid = $_POST['groupid'];
include 'db.php';
$sql = "insert into studentinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";

if ($conn ->query($sql) === TRUE){
        echo "Your information was added successfully";
}
else {
    echo "ERROR" . $conn->error;
}
}

?>

<?php
include '../layout/footer.php';
?>