<?php
    require 'connection.php';
    if(isset($_POST['fname'])){
        $user_firstname = $_POST['fname'];
    }
    if(isset($_POST['lname'])){
        $user_lastname = $_POST['lname'];
    }
    if(isset($_POST['email'])){
        $user_email = $_POST['email'];
    }
    if(isset($_POST['mobile'])){
        $user_mobile = $_POST['mobile'];
    }
    if(isset($_POST['ageyear'])){
        $user_ageyear = $_POST['ageyear'];
    }
    if(isset($_POST['sex'])){
        $user_sex = $_POST['sex'];
    }
    if(isset($_POST['department'])){
        $user_department = $_POST['department'];
    }
    if(isset($_POST['consultant'])){
        $user_consultant = $_POST['consultant'];
    }
    if(isset($_POST['preffered_date'])){
        $user_preffered_date = $_POST['preffered_date'];
    }
    if(isset($_POST['city'])){
        $user_city = $_POST['city'];
    }
    if(isset($_POST['country'])){
        $user_country = $_POST['country'];
    }
    
    $sql = "INSERT INTO appointment values('$user_firstname','$user_lastname','$user_email','$user_mobile','$user_ageyear','$user_sex','$user_department','$user_consultant','$user_preffered_date','$user_city','$user_country')";

    if(mysqli_query($conn, $sql)){
        echo '<script>';
        echo 'alert("appointment Book successfull");';
        echo 'window.location="#";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Registration Unsuccessful");';
        echo 'window.location="#";';
        echo '</script>';
    }

?>
