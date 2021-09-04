<?php
    session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand" href="home.php">Financated</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>

                <?php
                    if(isset($_SESSION['email'])){
                        
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="myProfile.php">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="plan.php">Plan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form/process-logout.php">Logout</a>
                </li>

                <?php 
                    } else {
                ?>
    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                        
                <?php
                    }
                ?>

            </ul>
            
            </form>
        </div>
</nav>