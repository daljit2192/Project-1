<?php session_start();
include 'submit.php'; ?>
<html lang="en">
    <head>
        <title>Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    </head>
    <body>

    <!-- Navigation -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Meals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Supplements</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <?php if(!isset($_SESSION['loggedInUser'])){ ?>
                            <a class="nav-link" href="login.php">Login</a>
                        <?php } else { ?>
                            <a class="nav-link" href="">Dashboard</a>
                        <?php }  ?>
                    </li>     
                </ul>
            </div>  
        </nav>