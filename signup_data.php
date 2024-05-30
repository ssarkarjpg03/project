<?php
    require 'connection.php';
    if(isset($_POST['fullname'])){
        $user_fullname = $_POST['fullname'];
    }
    if(isset($_POST['email'])){
        $user_email = $_POST['email'];
    }
    if(isset($_POST['phoneno'])){
        $user_phoneno = $_POST['phoneno'];
    }
    if(isset($_POST['pass'])){
        $user_pass = $_POST['pass'];
    }
    if(isset($_POST['confirmpass'])){
        $user_password = $_POST['confirmpass'];
    }
    
    $sql = "insert into users values('$user_fullname','$user_email','$user_phoneno','".md5($user_password)."')";

    if(mysqli_query($conn, $sql)){
        echo '<script>';
        echo 'alert("Signup Successful");';
        echo 'window.location="emailotp.html";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Signup Unsuccessful");';
        // echo 'window.location="signup.php";';
        echo '</script>';
    }

?>