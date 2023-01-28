<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project 01</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>


    
        <div class="banner">

            <a class="logo" href="index.php"  id="logo"><img src="img/blogsphere.png" alt="logo"></a>
            
            <img class="logo2" src="img/avatar.png" alt="YYX" id="avatar">

            <h1 class="heading">YYX BLOGS</h1>
            
            
            <div class="hero">
                <img src="./img/jess-bailey-q10VITrVYUM-unsplash.jpg" alt="hero image">
             
            </div>
      
        </div>
        <nav>

            <ul>
                <li><a class="nav-button" href="index.php">Home</a></li>
                <li><a class="nav-button" href="about.php">About</a></li>
                <li><a class="nav-button" href="blog.php">Find Blogs</a></li>

                <?php

                    if(isset($_SESSION['useruid'])) {

                        echo "<li><a class='nav-button' href='profile.php'>Profile</a></li>";
                        echo "<li><a class='nav-button' href='includes/logout.inc.php'>Log Out</a></li>";

                        
                    } else {

                        echo "<li><a class='nav-button' href='signup.php'>Sign Up</a></li>";
                        echo "<li><a class='nav-button' href='login.php'>Log In</a></li>";  
                    }

                ?>
            </ul>

        </nav>    
       


    <div class="wrapper1">
        <section class="index-intro">
            <?php
                if(isset($_SESSION['useruid'])) {

                   echo "<h1>HELLO " . $_SESSION['useruid'] . "</h1>";
                 } else {
                   echo "<h1>Hello Visitor!</h1>";

                }

            ?>
            <p>Here is an important paragraph that explains the purpose of the website.</p>

        </section>

        <section class="index-categories">

            <h2>Some Basic Categories</h2>
            <div class="index-categories-list">
                <div class="card">
                    <h3>Fun Stuff</h3>
                </div>
                <div class="card">
                    <h3>Serious Stuff</h3>
                </div>
                <div class="card">
                    <h3>Exciting Stuff</h3>
                </div>
                <div class="card">
                    <h3>China Stuff</h3>
                </div>
                <div class="card">
                    <h3>Dog Stuff</h3>
                </div>
                <div class="card">
                    <h3>School Stuff</h3>
                </div>

            </div>
        </section>

    </div>
    
</body>
</html>

<script src="./js/jquery-2.2.3.min.js"></script>
<script src="./js/index.js"></script>