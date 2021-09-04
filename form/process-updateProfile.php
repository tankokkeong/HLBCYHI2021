<?php

session_start();

$con = new mysqli("localhost", "root", "", "HLBCYHI2021");

if(isset($_POST['update'])){

    $users_email = $_SESSION['email'];

    $full_name = $_POST['full_name'];

    $age = $_POST['age'];

    $designation = $_POST['occupation'];

    $monthly_income = $_POST['monthly_income'];
    
    $update_user = "update users set full_name='$full_name',age='$age',designation='$designation',monthly_income='$monthly_income' where email='$users_email'";
    
    $run_users = mysqli_query($con,$update_user);
    
    if($run_users){
        
        echo "<script>alert('Your account has been edited.')</script>";

        header('Location: ../myProfile.php');
        
    }else{
        echo "<script>alert('Opps, something went wrong.')</script>";
    }
}

?>