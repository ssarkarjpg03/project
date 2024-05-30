<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($hostname, $username, $password);

    if($conn){
        echo "Connection is successfull";
    }
    else{
        echo "Connectiob Failed";
    }
?>