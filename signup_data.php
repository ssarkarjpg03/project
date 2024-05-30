<?php
require 'connection.php';
if (isset($_POST['fullname'])) {
    $user_fullname = $_POST['fullname'];
}
if (isset($_POST['email'])) {
    $user_email = $_POST['email'];
}
if (isset($_POST['phoneno'])) {
    $user_phoneno = $_POST['phoneno'];
}
if (isset($_POST['pass'])) {
    $user_pass = $_POST['pass'];
}
// if(isset($_POST['confirmpass'])){
//     $user_password = $_POST['confirmpass'];
// }

$sql = "INSERT INTO users values('$user_fullname','$user_email','$user_phoneno','" . md5($user_pass) . "')";

// if (mysqli_query($conn, $sql)) {
//     echo '<script>';
//     echo 'alert("Signup Successful");';
//     echo 'window.location="afterloging.html";';
//     echo '</script>';
// } else {
//     echo '<script>';
//     echo 'alert("Signup Unsuccessful");';
//     echo 'window.location="#";';
//     echo '</script>';
// }

session_start();
$phone=$_POST['phoneno'];
$otp=rand(0000,9999);
$_SESSION['OTP']=$otp;


$API="5caf41d62364d5b41a893adc1a9dd5d4";
$PHONE=$phone;
$OTP=$otp;
$URL="https://sms.renflair.in/V1.php?API=$API&PHONE=$PHONE&OTP=$OTP";
$curl=curl_init($URL);
curl_setopt($curl,CURLOPT_URL,$URL);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($curl);
curl_close($curl);
$data=json_decode($resp); 
$status=$data->status;
$massage=$data->message;
if($status=="SUCCESS"){
    header("location:otp-submit.php");
}
else{
    echo "Faild to send otp";
}

$OTP=$_SESSION['OTP'];
if(isset($_POST['otp'])){
    $submitedotp=$_POST['otp'];
    if($OTP==$submitedotp){
        header("location:afterloging.html");
    }
    else{
        echo "Enter Correct otp";
    }
}
?>