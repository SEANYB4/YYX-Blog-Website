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


<nav>
        
        <ul>
            <li><a class="nav-button" href="index.php">Home</a></li>
            <li><a class="nav-button" href="about.php">About</a></li>
            <li><a class="nav-button" href="blog.php">Find Blogs</a></li>

            <?php

                if(isset($_SESSION['useruid'])) {

                    echo "<li><a class='nav-button' href='profile.php'>Profile</a></li>";
                    echo "<li><a class='nav-button' href='logout.php'>Log Out</a></li>";  
                } else {

                    echo "<li><a class='nav-button' href='signup.php'>Sign Up</a></li>";
                    echo "<li><a class='nav-button' href='login.php'>Log In</a></li>";  
                }

            ?>

            
        </ul>
</nav>