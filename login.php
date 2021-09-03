<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include 'plugins.php';
    ?>
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css"/> 
</head>
<body>
    <?php 
        include 'header.php';
    ?>

    <div class="body-content">
        <div class="login-body">
            <div class="row login-row">
                <div class="col-lg-6 login-col login-col-1">
                    <div class="login-img">
                        <img src="images/financial data-amico.png" id="login-image"/>
                    </div>
                </div>

                <div class="col-lg-6 login-col login-col-2">
                    <div class="mt-3 text-center mb-3">
                        <h1>Sign In</h1>
                    </div>

                    <div class="mt-3 mb-3 text-secondary text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </div>

                    <form class="mt-3 login-form">
                        <div class="form-group">
                            <input type="email" class="input-control" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-control" placeholder="Password">
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="sign-up.php">Do not have an account?</a>
                            </div>

                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
    </div>

    <?php 
        include 'footer.php';
    ?>
</body>
</html>