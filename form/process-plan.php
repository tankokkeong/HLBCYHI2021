<?php

    session_start();
    
    $conn = new mysqli("localhost", "root", "", "HLBCYHI2021");

    $users_email = $_SESSION['email'];

    $query = "SELECT userID FROM users WHERE email = '$users_email'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $userID = $row['userID'];

    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];
    $Q7 = $_POST['Q7'];
    $Q8 = $_POST['Q8'];
    $Q9 = $_POST['Q9'];
    $Q10 = $_POST['Q10'];

    $Q1Answers="";  

    foreach($Q1 as $checkboxValue)  
    {  
        $Q1Answers .= $checkboxValue.",";  
    }  

    $sql = "INSERT INTO form (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, userID) 
    VALUES ('$Q1Answers', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10', '$userID');";

    $run_form = mysqli_query($conn, $sql);

    if($run_form){
        header('Location: ../plan-details.php');
    }
?>