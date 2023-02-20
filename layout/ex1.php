<?php
$title = "Exercise 1";
$filename = 'ex1.php';
include "header.php" ?>



<h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>

<?php
echo "Matt Flores";
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

<script>
document.write("Hello world javascript test");
</script>
<noscript>
    Please enable javascript to view this content,
</noscript>

<input type="button" onclick="hello()" value="Click Me"></input>

<h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h3>

<?php $title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<script>
// window.alert("This will trigger an alert box");
// window.alert(5+10);
document.write("Hello this is a test");
</script>
<h3>3.5 Tables and Variables</h3>
<input type="button" onclick="add()" value="add"></input>
<hr>
<p id="place1" style="color:white; background-color:black;"></p>
<script>
document.getElementById("place1").innerHTML = "This will go to place1"
</script>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th>S.N</th><th>Name</th><th>Grade</th>
</tr>
<tr>
<td>1</td><td>Pekka</td><td>$g1</td>
</tr>
<tr>
<td>2</td><td>Johanna</td><td>$g2</td>
</tr>
<tr>
<td>2</td><td>John</td><td>$g3</td>
</tr>
</table>
";
?>

<h3>4 Screenshot of DevEnv</h3>

<img src="DevEnv.png">

<h2>Changing Background Color</h2>

<form>

<input type="color" name="background" onchange="changeColor('background' ,this.value)">

</form>



<?php include "footer.php" ?>

