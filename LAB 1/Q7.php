//Take your entire roll number as a get message from the url and display only the last three digits of your roll number and also display the full roll number by removing the dilimiter and /.

<?php
$roll = $_GET['roll'];
echo "Full Roll Number: " . str_replace("/", "", $roll) . "<br>";
echo "Last Three Digits: " . substr($roll, -3);
?>