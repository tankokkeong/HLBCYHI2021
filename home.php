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
    <link rel="stylesheet" href="style/home.css"/> 

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
            <div class="article-container">
                <div class="article-container-contents">
                    <div class="articles-header">
                        <h1>Financial Literacy Articles</h1>
                    </div>

                    <div class="article-content">
                        <div class="card article-display">
                            <h3>TITLE HEADING</h3>
                            <span>Title description, Dec 7, 2017</span>

                            <div class="fakeimg" style="height:400px;">
                                <img src="images/article-image.jpg" class="article-image">
                            </div>
                                <p>Some text..</p>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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