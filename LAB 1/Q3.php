//Write a script in php to display to display the current date and time.

<?php
$curr_date_time = array(
"curr_date_time" => date("Y-m-d H:i:s")
);
header('Content-Type: application/json');
echo json_encode($curr_date_time);
?>