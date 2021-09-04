<?php
    
    $conn = new mysqli("localhost", "root", "", "HLBCYHI2021");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    $queryChecking = "SELECT * FROM users WHERE email = '$email'";
    $sameEmail = mysqli_query($conn, $queryChecking);

    if(mysqli_num_rows($sameEmail) > 0 ){
        echo "User Already Exists";
    } else {
        $sql = "INSERT INTO users (email, password, full_name) 
        VALUES ('$email', '$password', '$fullname');";
    
        mysqli_query($conn, $sql);
    
        header('Location: ../login.php');
    }
?>