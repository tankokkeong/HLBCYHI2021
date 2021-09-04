<?php
    session_start();
    
    $conn = new mysqli("localhost", "root", "", "HLBCYHI2021");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $correctAcc = mysqli_query($conn, $sql);

    if(mysqli_num_rows($correctAcc) == 1 ){
        $_SESSION['email'] = $email;

        header('Location: ../home.php');

    } else {
        header('Location: ../login.php');
    }
?>