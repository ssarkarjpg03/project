<?php
session_start();
$phone=$_POST['phone'];
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
?>