//Write a php script to take a random number as an input via get method from the url and validate if the random number matches show wellcome.


<?php
$otp = rand(100000, 999999);
if (isset($_GET["number"])) {
if ($_GET["number"] == $otp) {
echo "Welcome";
}
else {
echo "Invalid OTP";
}
}
else {
echo "Your OTP is: " . $otp;
}
?>
