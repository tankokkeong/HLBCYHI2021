<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include 'plugins.php';
    ?>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/sign-up.css"/> 
</head>
<body>
    <?php 
        include 'header.php';
    ?>

    <div class="body-content">
        <div class="signUp-body">
            <div class="row signUp-row">
                <div class="col-lg-6 signUp-col signUp-col-2">
                    <div class="mt-3 text-center mb-3">
                        <h1>Welcome to Financated</h1>
                    </div>

                    <div class="mt-3 mb-3 text-secondary text-center">
                        <h3>Register You Account.</h3>
                    </div>

                    <form class="mt-6 signUp-form" action="form/process-signup.php" method="POST">
                        
                            <div class="form-group ">
                                <input type="email" class="input-control" name="email" required placeholder="Email address">
                            </div>
                            <div class="form-group ">
                                <input type="password" class="input-control" name="password" required placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="input-control" name="fullname" required placeholder="Full Name">
                            </div>

                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mt-3 text-center">
                                <a href="login.php">Already Have an Account? Sign in</a>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
                <div class="col-lg-6 signUp-col signUp-col-1">
                    <div class="signUp-img">
                        <img src="images/mobile-login-rafiki.png" id="signUp-image"/>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

    <?php 
        include 'footer.php';
    ?>
</body>
</html>