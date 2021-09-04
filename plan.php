<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Plan</title>

    <?php 
        include 'plugins.php';
    ?>

    <link rel="stylesheet" href="style/plan.css"/> 

</head>
<body>
    <?php 
        include 'header.php';
        if(isset($_SESSION["email"])){ 
    ?>

    <div class="body-content">
        <div class="question-containers">
            <div class="text-center mb-3">
                <h1>Financial Plan</h1>
                <p class="question-indicator">Answer these 10 questions to get your free financial solutions!</p>
            </div>

            <form class="">
                <div class="questions-ask mt-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q1) Which financial products are you interested in?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Stock
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Forex
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Cryptocurrency
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Structure Warrant
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Money Market / Bond
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Mutual Fund / Unit Trust
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Commodity Futures
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q2) Occupation</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Student
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Unemployed
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Others
                        </label>
                    </div>
                </div>
            </form>
        </div>

        
    </div>

    <?php 
        include 'footer.php';
        } else {
            header('Location: login.php');
        }
    ?>
</body>
</html>