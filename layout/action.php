<?php
$title = "Exercise 3";
include "header.php" 
?>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['bdate'];
$color = $_POST['color'];

echo "<h3> Your name is $fname $lname.
Your favorite color is $color and your date of birth is $dob
</h3>";

?>


<?php include "footer.php" ?>