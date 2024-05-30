<?php
session_start();

$OTP=$_SESSION['OTP'];
if(isset($_POST['otp'])){
    $submitedotp=$_POST['otp'];
    if($OTP==$submitedotp){
        echo "Otp Verified";
    }
    else{
        echo "Enter Correct otp";
    }
}

?>
<form action="otp-submit.php" method="post">
<input type="number" name="otp" placeholder="enter otp">
<button type="submit">OK</button>
</form>