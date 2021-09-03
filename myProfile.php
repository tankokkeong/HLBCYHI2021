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
    ?>

    <div class="profile-title-container text-center mt-5">

        <h1 class="profile-title">My Profile</h1>

    </div>

    <div class="profile-container">

        <form>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="name" class="form-control" id="name" value="Emma Rammos">
                </div>
            </div>

            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                <input type="age" class="form-control" id="age" value="26">
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                <input type="location" class="form-control" id="location" value="Istanbul">
                </div>
            </div>

            <div class="form-group row">
                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                <div class="col-sm-10">
                <input type="occupation" class="form-control" id="occupation" value="Financial Manager">
                </div>
            </div>

            <div class="form-group row">
                <label for="income" class="col-sm-2 col-form-label">Monthly income</label>
                <div class="col-sm-10">
                <select class="form-control income">
                    <option>Select your salary range</option>
                    <option>RM 0 - RM 1000</option>
                    <option>RM 1001 - RM 4000</option>
                    <option>RM 4000 - RM 10000</option>
                    <option>RM 10001 and above</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="income" class="col-sm-2 col-form-label">Interest</label>
                <div class="col-sm-10">
                <select class="form-control income">
                    <option>Select your interest</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="income" class="col-sm-2 col-form-label">Goals</label>
                <div class="col-sm-10">
                <select class="form-control income">
                    <option>Select your goal</option>
                </select>
                </div>
            </div>
            <button type="button" class="btn btn-success btn-block btn-lg mt-5 save-profile" id="save-profile">Save Profile</button>
        </form>

     

    </div>
    <style>
        
        .profile-container{
            margin: 3% 5%;
            padding: 5% 10%;
        }

    </style>

    <?php 
        include 'footer.php';
    ?>
</body>
</html>