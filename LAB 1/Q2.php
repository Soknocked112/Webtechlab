//Write a script in php to display all the character of the string one at a time in every new line.


<?php
$data = "Sounak Saha";
for ($i = 0; $i < strlen($data); $i++) {
echo $data[$i] . "<br>";
}
?>