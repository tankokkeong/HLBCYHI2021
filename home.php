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
            <div class="article-container">
                <div class="article-container-contents">
                    <div class="articles-header">
                        <h1 class="text-light">Financial Literacy Articles</h1>
                    </div>

                    <div class="article-content">
                        <div class="search-container mt-3">
                            <form>
                                <div class="search-icon-container">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Search articles here..." id="article-input"/>
                            </form>
                        </div>

                        <?php 
                            // get database credentials
                            include("database/database-credential.php");

                            $query = "SELECT * FROM cnbc_headlines";
                        
                            $result = mysqli_query ($conn, $query);

                            //print out results
                            while ($row = mysqli_fetch_array($result))
                            {
                                printf('<div class="card article-display mb-3">');
                                printf('    <h3>%s</h3>', $row['Headlines']);
                                printf('    <span>%s</span>', $row["Time"]);
                                printf('    <div class="fakeimg">');
                                printf('        <img src="images/article-image.jpg" class="article-image">');
                                printf('    </div>');
                                printf('    <p class="mt-3">%s</p>', $row["Description"]);
                                printf('</div>');
                            }
                        
                        ?>
                        <!-- <div class="card article-display">
                            <h3>TITLE HEADING</h3>
                            <span>Title description, Dec 7, 2017</span>

                            <div class="fakeimg" style="height:400px;">
                                <img src="images/article-image.jpg" class="article-image">
                            </div>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div> -->
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