<?php session_start();
include 'submit.php'; ?>
<html lang="en">
    <head>
        <title>Get Recepie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <style type="text/css">
            .overlay {
                position: absolute; 
                bottom: 0; 
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                color: #f1f1f1; 
                width: 100%;
                transition: .5s ease;
                opacity:0;
                color: white;
                font-size: 20px;
                padding: 20px;
                text-align: center;
            }

            .card:hover .overlay {
                opacity: 1;
            }

            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

                fieldset, label { margin: 0; padding: 0; }
                h1 { font-size: 1.5em; margin: 10px; }


                .rating { 
                  border: none;
                  margin-right: 42px;

                }

                .rating > input { display: none; } 
                .rating > label:before { 
                  margin: 5px;
                  font-size: 1.25em;
                  font-family: FontAwesome;
                  display: inline-block;
                  content: "\f005";
                }

                .rating > .half:before { 
                  content: "\f089";
                  position: absolute;
                }

                .rating > label { 
                  color: #ddd; 
                 float: right; 
                }


                .rating > input:checked ~ label, 
                .rating:not(:checked) > label:hover, 
                .rating:not(:checked) > label:hover ~ label { color: #FFD700; cursor: pointer; } 

                .rating > input:checked + label:hover, 
                .rating > input:checked ~ label:hover,
                .rating > label:hover ~ input:checked ~ label,
                .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
        </style>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
    </head>
    <body>

    <!-- Navigation -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">Get Recepie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recepies">Recepies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <?php if(!isset($_SESSION['user'])){ ?>
                            <a class="nav-link" href="login.php">Login</a>
                        <?php } else { ?>
                            <a class="nav-link" href="admin/dashboard.php">Dashboard</a>
                        <?php }  ?>
                    </li>     
                </ul>
            </div>  
        </nav>