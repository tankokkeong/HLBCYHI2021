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

    <div class="body-content mb-5">
        <div class="question-containers">
            <div class="text-center mb-3">
                <h1>Financial Plan</h1>
                <p class="question-indicator">Answer these 10 questions to get your free financial solutions!</p>
            </div>

            <form action="form/process-plan.php" method="POST">
                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q1) Which financial products are you interested in?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Stock">
                        <label class="form-check-label" for="exampleRadios1">
                            Stock
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Forex">
                        <label class="form-check-label" for="exampleRadios2">
                            Forex
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Structure Warrant">
                        <label class="form-check-label" for="exampleRadios2">
                            Structure Warrant
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Money Market / Bond">
                        <label class="form-check-label" for="exampleRadios2">
                            Money Market / Bond
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Mutual Fund / Unit Trust">
                        <label class="form-check-label" for="exampleRadios2">
                            Mutual Fund / Unit Trust
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Q1[]" value="Commodity Futures">
                        <label class="form-check-label" for="exampleRadios2">
                            Commodity Futures
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q2) Occupation</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="Student">
                        <label class="form-check-label" for="exampleRadios2">
                            Student
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="Unemployed">
                        <label class="form-check-label" for="exampleRadios2">
                            Unemployed
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="Others">
                        <label class="form-check-label" for="exampleRadios2">
                            Others
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q3) Do you have any experience in finance?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="Zero experience">
                        <label class="form-check-label" for="exampleRadios2">
                            Zero experience
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="1 year experience">
                        <label class="form-check-label" for="exampleRadios2">
                            1 year experience
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="2 - 4 years experience">
                        <label class="form-check-label" for="exampleRadios2">
                            2 - 4 years experience
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="5 - 10 years experience">
                        <label class="form-check-label" for="exampleRadios2">
                            5 - 10 years experience
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q4) Who is responsible for day-to-day decisions about money in your household?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="Self">
                        <label class="form-check-label" for="exampleRadios2">
                            You
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="Self and Partner">
                        <label class="form-check-label" for="exampleRadios2">
                            You and Your Partner
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="Self and Family Member">
                        <label class="form-check-label" for="exampleRadios2">
                            You and another family member
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="Partner">
                        <label class="form-check-label" for="exampleRadios2">
                            Your partner
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="Family Member">
                        <label class="form-check-label" for="exampleRadios2">
                            Another family member
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q5) How long will you be able to sustain your bank balance after retiring?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="6 Months">
                        <label class="form-check-label" for="exampleRadios2">
                            6 Months
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="1 Year">
                        <label class="form-check-label" for="exampleRadios2">
                            1 Year
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="2 - 4 Years">
                        <label class="form-check-label" for="exampleRadios2">
                            2 - 4 Years
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="5 - 10 Years">
                        <label class="form-check-label" for="exampleRadios2">
                            5 - 10 Years
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="Not Sure">
                        <label class="form-check-label" for="exampleRadios2">
                            Not Sure
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q6) Do you use your credit card often?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q6" value="Yes">
                        <label class="form-check-label" for="exampleRadios2">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q6" value="No">
                        <label class="form-check-label" for="exampleRadios2">
                            No
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q6" value="Prefer Not To Say">
                        <label class="form-check-label" for="exampleRadios2">
                            Prefer Not To Say
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q7) Do you save money often?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q7" value="Yes">
                        <label class="form-check-label" for="exampleRadios2">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q7" value="No">
                        <label class="form-check-label" for="exampleRadios2">
                            No
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q8) How much will you spend to purchase a house?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q8" value="Below RM 100,000">
                        <label class="form-check-label" for="exampleRadios2">
                            Below RM 100,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q8" value="RM 100,001 - RM 300,000">
                        <label class="form-check-label" for="exampleRadios2">
                            RM 100,001 - RM 300,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q8" value="RM 300,001 - RM 600,000">
                        <label class="form-check-label" for="exampleRadios2">
                            RM 300,001 - RM 600,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q8" value="RM 600,001 - RM 1,000,000">
                        <label class="form-check-label" for="exampleRadios2">
                            RM 600,001 - RM 1,000,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q8" value="Above RM 1,000,001">
                        <label class="form-check-label" for="exampleRadios2">
                            Above RM 1,000,001
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q9) How much will you spend to purchase a car?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q9" value="Below RM 40,000">
                        <label class="form-check-label" for="exampleRadios2">
                            Below RM 40,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q9" value="RM 40,001 - RM 80,000">
                        <label class="form-check-label" for="exampleRadios2">
                            RM 40,001 - RM 80,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q9" value="RM 80,001 - RM 120,000">
                        <label class="form-check-label" for="exampleRadios2">
                            RM 80,001 - RM 120,000
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q9" value="Above RM 120,001">
                        <label class="form-check-label" for="exampleRadios2">
                            Above RM 120,001
                        </label>
                    </div>
                </div>

                <div class="questions-ask mt-5">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Q10) Do you know that Hong Leong Bank provides a financial literacy initiative called “DuitSmart”?</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q10" value="Yes, I have heard about it">
                        <label class="form-check-label" for="exampleRadios2">
                            Yes, I have heard about it
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q10" value="No, I have not heard about it">
                        <label class="form-check-label" for="exampleRadios2">
                            No, I have not heard about it
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q10" value="No, but I would like to know about it">
                        <label class="form-check-label" for="exampleRadios2">
                            No, but I would like to know about it
                        </label>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-dark mt-3" name="update" id="save-profile">Get Plan</button>
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