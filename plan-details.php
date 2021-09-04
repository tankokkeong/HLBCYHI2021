<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Financial Plan</title>

    <?php 
        include 'plugins.php';
    ?>

    <link rel="stylesheet" href="style/plan.css"/> 
    <link rel="stylesheet" href="style/plan-details.css"/> 
</head>
<body>
    <?php 
        include 'header.php';
        if(isset($_SESSION["email"])){ 
    ?>

    <div class="body-content mb-5">
        <div class="question-containers">
            <div class="text-center mb-3">
                <h1>Plan Details</h1>
                <p class="question-indicator">Here is your personalized plan details...</p>
            </div>

            <table class="table plan-table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Stages</th>
                    <th scope="col">Tasks</th>
                    <th scope="col">Goals</th>
                    <th scope="col">Description</th>
                    <th scope="col">
                        <div class="text-center">
                            Progress
                        </div>
                    </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td rowspan="4">Stage 1</td>
                        <td>Create a saving account</td>
                        <td>Save up to RM20,000</td>
                        <td>Spend below your budget, so that you will have some extra money for saving.</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>
                    
                    <tr>
                        <td >Task 2</td>
                        <td>Goal 2</td>
                        <td>Description 2</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 3</td>
                        <td>Goal 3</td>
                        <td>Description 3</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 4</td>
                        <td>Goal 4</td>
                        <td>Description 4</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td  rowspan="4">Stage 2</td>
                        <td>Task 1</td>
                        <td>Goal 1</td>
                        <td>Description 1</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>
                    
                    <tr>
                        <td >Task 2</td>
                        <td>Goal 2</td>
                        <td>Description 2</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 3</td>
                        <td>Goal 3</td>
                        <td>Description 3</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 4</td>
                        <td>Goal 4</td>
                        <td>Description 4</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td  rowspan="4">Stage 3</td>
                        <td>Task 1</td>
                        <td>Goal 1</td>
                        <td>Description 1</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>
                    
                    <tr>
                        <td >Task 2</td>
                        <td>Goal 2</td>
                        <td>Description 2</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 3</td>
                        <td>Goal 3</td>
                        <td>Description 3</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 4</td>
                        <td>Goal 4</td>
                        <td>Description 4</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td  rowspan="4">Stage 4</td>
                        <td>Task 1</td>
                        <td>Goal 1</td>
                        <td>Description 1</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>
                    
                    <tr>
                        <td >Task 2</td>
                        <td>Goal 2</td>
                        <td>Description 2</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 3</td>
                        <td>Goal 3</td>
                        <td>Description 3</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                    <tr>
                        <td >Task 4</td>
                        <td>Goal 4</td>
                        <td>Description 4</td>
                        <td class="progress-col"><input type="checkbox" class="form-control progress-checkbox"/></td>
                    </tr>

                </tbody>
            </table>

            <div class="mt-3 text-center">
                <button class="btn btn-dark">Update Progress</button>
            </div>
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