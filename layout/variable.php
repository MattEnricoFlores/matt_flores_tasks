<?php
$title = "Exercise 3";
$filename = 'variable.php';
include "header.php" ?>

<h3>In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>

<h2> 1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post" class>
<div class="row">
    <div class="col">
<input type="text" name="fname" class="form-control" required placeholder="First Name:"> 
    </div>
    <div class="col">
<input type="text" name="lname" class="form-control" required placeholder="Last Name:"> 
    </div>
</div>
<div class="row">
    <div class="col">
Birth Date :<input type="date" name="bdate" required> 
    </div>
    <div class="col">
Select your favorite color: <input type="color" name="color" required>
    </div>
</div>
<input type="Submit" value="Submit">

</form>

<h2>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h2>


<table class="table" style="color: #C5C6C7;">
    <thead class="thead-dark">
<tr>
<th>S.N</th><th>Name</th><th>Grade</th>
</tr>
<tr>
<td>1</td><td>Pekka</td><td>5</td>
</tr>
<tr>
<td>2</td><td>Johanna</td><td>4</td>
</tr>
<tr>
<td>2</td><td>John</td><td>5</td>
</tr>
    </thead>
</table>

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h2>

<?php
$string1 = "I am";
$string2 = "Matt Flores";
echo $string1 . " " . $string2."<br>";
echo strlen("I am Matt Flores");
?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>

<?php
$n1 = 298;
$n2 = 234;
$n3 = 46;
echo $n1 + $n2 + $n3;
?>

<h2>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h2>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>


<?php include "footer.php" ?>