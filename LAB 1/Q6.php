//Write a php script to impliment the following in a string:trim(),ltrim(),rtrim(),strlen(),strtoupper(),strtolower(),ucfirst(),ucwords(),strrev(),str_replace(),substr(),strpos(),explode(),implode()

<?php
$str = "  hello world from php  ";
echo trim($str) . "<br>";
echo ltrim($str) . "<br>";
echo rtrim($str) . "<br>";
echo strlen($str) . "<br>";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo ucfirst(trim($str)) . "<br>";
echo ucwords(trim($str)) . "<br>";
echo strrev(trim($str)) . "<br>";
echo str_replace("php", "PHP", $str) . "<br>";
echo substr(trim($str), 0, 5) . "<br>";
echo strpos($str, "world") . "<br>";
$arr = explode(" ", trim($str));
print_r($arr);
echo "<br>";
echo implode("-", $arr);
?>