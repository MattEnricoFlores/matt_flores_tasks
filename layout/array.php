<?php
$title = "Home Page";
include "header.php" ?>

<h2>Make a simple calculator</h2>
<form action="" method="get">

<input type="number" step="any" placeholder="Enter your first number" name="num1" required> <br>
<input type="number" step="any" placeholder="Enter your second number" name="num2" required> <br>
<select name="operator">
<option value="add">Add</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divide</option>
</select>
<input type="submit" name="cal" value="Calculate">
</form>
<?php
if (isset($_GET["cal"])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch($operator){

        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
             break;
        case "mul":
             $result = $num1 * $num2;
             break;

        case "div":
            $result = $num1 / $num2;
            break;

        default:
            $result = "Error: Unable to give answer.";
            break;
    }
}
    if (isset($result)){
    echo "<h2> Result: $result </h2>";
}
?>

<h3>1.  Write a php script to display courses as list. Use li
</h3>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$num = count($courses);
for ($i = 0; $i < $num; $i++){
    echo "<li> $courses[$i] </li>";
}
?>

<h3>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.</h3>

<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
print_r(array_values($courses1));
?>

<h3>3. Sort the following array</h3>

<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "a) ascending order sort by value";

sort($courses3);
$num = count($courses3);
for ($i1 = 0; $i1 < $num; $i1++){
    echo "<li> $courses3[$i1] </li>";
}

$courses31=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "b) ascending order sort by Key";
ksort($courses31);
$num = count($courses31);
for ($i1 = 0; $i1 < $num; $i1++){
    echo "<li> $courses31[$i1] </li>";
}

$courses32=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "c) descending order sort by Value";
rsort($courses32);
$num = count($courses32);
for ($i1 = 0; $i1 < $num; $i1++){
    echo "<li> $courses32[$i1] </li>";
}

$courses33=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "d) descending order sort by Key";
krsort($courses33, SORT_NUMERIC);
$num = count($courses33);
foreach ($courses33 as $key => $val) {
    echo "<li>$key = $val\n </li>";
}
?>


<h3>4. Change the following array's all values to upper case.</h3>

<?php
$courses4=array("php", "html", "javascript", "cms", "project");
$courses4 = array_map('strtoupper', $courses4);
for ($i1 = 0; $i1 < $num; $i1++){
    echo "<li> $courses4[$i1] </li>";
}
?>

<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php
$color = array("#0000FF" => "Blue", "#FF0000" => "Red", "#A020F0" => "Purple");
foreach ($color as $key => $val) {
    echo "$key = $val\n";
}
?>

<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>

<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
// Explode splits the strings in an array into different strings using a parameter. In the code "," was used as the parameter to split the strings up.
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? 
// Count counts the number of elements within an array and can be used later for looping through the array.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do? 
// Sort organizes the array based on a parameter and the kind of sorting you want to do. sort() organizes by ascending order.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//The $i is equal to the current count of the temp_array - 5 and the loop continues as long as $i is less than the current count. The code also increases the value of $i by 1 in every loop.
//With this loop, it continuously prints out the value of the array based on "$i" as the key and prints ", " to format it better.
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>



<?php include "footer.php" ?>