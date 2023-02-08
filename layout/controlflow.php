<?php
$title = "Exercise 4";
$filename = 'controlflow.php';
include "header.php" ?>


<h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
</h2>

<?php
$current_month = date("F");

if ($current_month == "August"){
    echo "It's August, so it's still holiday.";
}
else {
    echo "Not August, this is $current_month so I don't have any holidays.";
}
?>

<h2>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h2>

<?php
$color = "Red";
if ($color == "Red"){
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}
?>

<h2>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h2>

<?php
$total_grade = 89;
switch($total_grade) {
case $total_grade > 80:
    echo "Excellent";
    echo "<br>";
    break;
case $total_grade>70 && $total_grade<80:
        echo "Great";
        echo "<br>";
        break;
case $total_grade>60 && $total_grade<70:
        echo "Good";
        echo "<br>";
        break;
case $total_grade>50 && $total_grade<60:
            echo "Pass";
            echo "<br>";
            break;
case $total_grade<50:
                echo "Fail";
                echo "<br>";
                break;
default:
        echo "No Grade Detected";
        echo "<br>";
        break;
}
?>

<h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h2>

<form action="eligibility.php" method="post" class>
<div class="row">
    <div class="col">
<input type="text" name="name" class="form-control" required placeholder="Name"> 
    </div>
    <div class="col">
<input type="number" name="age" class="form-control" required placeholder="Age"> 
    </div>
</div>
<input type="Submit" value="Submit">
</form>


<h2>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use IF statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….</h2>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Edg') == true ) {
    echo "You are using Microsoft Edge.";
}
elseif (strpos($user_agent, 'Chrome') == true ) {
    echo "You are using Google Chrome.";
}
elseif (strpos($user_agent, 'Firefox') == true ) {
    echo "You are using Mozilla Firefox.";
}
elseif (strpos($user_agent, 'OPR') == true ) {
    echo "You are using Opera Browser.";
}
else {
    echo "Your browser cannot be determined.";
}


?>
<?php include "footer.php" ?>