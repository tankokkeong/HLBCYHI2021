<?php
    
    $conn = new mysqli("localhost", "root", "", "HLBCYHI2021");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    $queryChecking = "SELECT * FROM users WHERE email = '$email'";
    $sameEmail = mysqli_query($conn, $queryChecking);

    if(mysqli_num_rows($sameEmail) > 0 ){
        echo "<script>alert('User Already Exisit'); window.location = '../sign-up.php';</script>";

    } else {
        $sql = "INSERT INTO users (email, password, full_name) 
        VALUES ('$email', '$password', '$fullname');";
    
        mysqli_query($conn, $sql);
    

        echo "<script>alert('Successfully Registered'); window.location = '../login.php';</script>";
        
        //header('Location: ../login.php');
    }
?>