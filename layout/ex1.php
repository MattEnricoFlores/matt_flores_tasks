<?php
$title = "Exercise 1";
include "header.php" ?>



<h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>

<?php
echo "Matt Flores <br>";
echo "BBCAP22";
?>

<h3>3.2 Write PHP code to display the following message.</h3>

<?php
echo "Hello world! My name is \"David\"";
?>

<h3>3.3 Write the PHP code in to display the current date.</h3>

<?php
echo date("d.m.Y");
?>

<h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h3>

<?php $title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>




<?php include "footer.php" ?>

