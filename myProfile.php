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

    

    <div class="profile-container">

        <div class="profile-title-container text-center mt-5">

            <h1 class="profile-title">My Profile</h1>

        </div>

        <div class="profileInfo-container">

            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="name" class="form-control" id="name" placeholder="Emma Rammos">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                    <input type="age" class="form-control" id="age" placeholder="26">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-10">
                    <input type="occupation" class="form-control" id="occupation" placeholder="Financial Manager">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                    <!-- <input type="location" class="form-control" id="location" value="Istanbul"> -->
                    <select class="form-control location" id="location">
                        <option>Select the location</option>
                        <option>Johor</option>
                        <option>Kedah</option>
                        <option>Kelantan</option>
                        <option>Melaka</option>
                        <option>Negeri Sembilan</option>
                        <option>Pahang</option>
                        <option>Penang</option>
                        <option>Perak</option>
                        <option>Perlis</option>
                        <option>Sabah</option>
                        <option>Sarawak</option>
                        <option>Selangor</option>
                        <option>Terengganu</option>
                        <option>Wilayah Persekutuan Kuala Lumpur</option>
                        <option>Wilayah Persekutuan Labuan</option>
                        <option>Wilayah Persekutuan Putrajaya</option>
                    </select>
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

                <div class="text-center">
                    <button type="button" class="btn btn-primary mt-3 save-profile" id="save-profile">Save Profile</button>
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
    ?>
</body>
</html>