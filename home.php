<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
        include 'plugins.php';
    ?>

</head>
<body>
    <?php 
        include 'header.php';
    ?>

    <div class="body-content">
        <div class="articles-body">
            <div class="article-body-img">
                <img class="article-img" src="images/homepage-img.jpg" alt="home">
            </div>
            <div class="articles-header">
                <h4>Financial Literacy Articles</h4>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="mr-4 col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        <div class="articles-desc">
                            <p>Title : </p>
                            <p>Description : </p>
                            <p>Tags : </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="mr-4 col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        <div class="articles-desc">
                            <p>Title : </p>
                            <p>Description : </p>
                            <p>Tags : </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="mr-4 col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        <div class="articles-desc">
                            <p>Title : </p>
                            <p>Description : </p>
                            <p>Tags : </p>
                        </div>
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