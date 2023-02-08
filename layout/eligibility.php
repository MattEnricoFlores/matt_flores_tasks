<?php
$title = "Home Page";
include "header.php" ?>
<?PHP
$name = $_POST['name'];
$age = $_POST['age'];

if ($age >= 18) {
    echo "$name you are eligible for voting.";
}
else {
    echo "$name you not are eligible for voting.";
}

?>

<?php include "footer.php" ?>