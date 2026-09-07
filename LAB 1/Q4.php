//Create an array in php to store the name of your 10 friends and their phone numbers.Display the names of those students who have odd phone numbers.

<?php
$friends = [
"Sounak" => "9876543210",
"Shreya" => "9876543211",
"Priya" => "9876543212",
"Ankit" => "9876543213",
"Riya" => "9876543214",
"Arjun" => "9876543215",
"Sneha" => "9876543216",
"Amit" => "9876543217",
"Puja" => "9876543218",
"Rohit" => "9876543219"
];
foreach ($friends as $name => $phone) {
if ($phone % 2 != 0) {
header('Content-Type: application/json');
echo json_encode($name);
}
}
?>
