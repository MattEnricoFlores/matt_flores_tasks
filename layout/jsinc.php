<?php
$title = "Javascript events and form validation";
$filename = 'ex1.php';
include "header.php" ?>

<h2>Button that displays date</h2>
<button onclick="this.innerHTML = Date()">Click to know date</button>

<h2>Make a button and a placeholder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML = Date()">Click to know date</button>
<p id="p1"></p>



<h2>Change bg color</h2>

<form>
    <input type="color" id="background" onchange="changeColor()">
</form>


<h2>Change font color</h2>

<form>
    <input type="color" id="fcolor" onchange="changefontColor()">
</form>

<h2> Mouse over and on mouse out </h2>

<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize='2em';"
onmouseout="
this.style.color='red';
this.style.backgroundColor='blue';
this.style.fontSize='2em';
"
> Text
</span>

<?php include "footer.php" ?>

