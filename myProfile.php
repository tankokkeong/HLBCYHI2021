<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include 'plugins.php';
    ?>
    <title>My Profile</title>
    
</head>
<body>
    <?php 
        include 'header.php';
        if(isset($_SESSION["email"])){ 

            $con = new mysqli("localhost", "root", "", "HLBCYHI2021");

            $users_session = $_SESSION['email'];

            $get_users = "select * from users where email ='$users_session'";

            $run_users = mysqli_query($con, $get_users);

            $row_users = mysqli_fetch_array($run_users);

            $full_name = $row_users['full_name'];

            $age = $row_users['age'];

            $designation = $row_users['designation'];

            $monthly_income = $row_users['monthly_income'];
    ?>

    <div class="profile-container">

        <div class="profile-title-container text-center mt-5">

            <h1 class="profile-title">My Profile</h1>

        </div>

        <div class="profileInfo-container">

            <form action="form/process-updateProfile.php" method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="name" name="full_name" class="form-control" id="name" value="<?php echo $full_name; ?>" placeholder="Emma Rammos">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                    <input type="age" name="age" class="form-control" value="<?php echo $age; ?>" id="age" placeholder="26">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-10">
                    <input type="occupation" name="occupation" class="form-control" value="<?php echo $designation; ?>" id="occupation" placeholder="Financial Manager">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="income" class="col-sm-2 col-form-label">Monthly income</label>
                    <div class="col-sm-10">
                    <select class="form-control income" name="monthly_income">
                        <?php
                            if($monthly_income == null){
                        ?>
                        <option value="0">Select your salary range</option>
                        <option value="1000">RM 0 - RM 1,000</option>
                        <option value="4000">RM 1,001 - RM 4,000</option>
                        <option value="10000">RM 4,000 - RM 10,000</option>
                        <option value="10001">RM 10,001 and above</option>
                        <?php  
                            } else {
                        ?>
                        <option value=<?php echo $monthly_income ?>><?php echo $monthly_income ?></option>
                        <option value="0">Select your salary range</option>
                        <option value="1000">RM 0 - RM 1,000</option>
                        <option value="4000">RM 1,001 - RM 4,000</option>
                        <option value="10000">RM 4,000 - RM 10,000</option>
                        <option value="10001">RM 10,001 and above</option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 save-profile" name="update" id="save-profile">Save Profile</button>
                </div>
                           
            </form>

        </div>


    </div>


    <style>
        .profile-container{
            min-height: 100vh;
        }

        .profileInfo-container{
            margin: 3% 5% !important;
            padding: 5% 10%!important;
        }

    </style>

    <?php 
        include 'footer.php'; 
        } else {
            header('Location: login.php');
        }
?>
</body>
</html>