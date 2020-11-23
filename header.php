<?php include 'submit.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website</title>
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
        </style>
    </head>
    <body>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post">
                        <div class="modal-header">
                            <h3 class="modal-title">Login here!!</h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/action_page.php">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <h6>Don't have account? Signup with us <a data-toggle="modal" data-target="#signUpModal" style="cursor: pointer; color: red;" class="_signup"> here </a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true" style="overflow: scroll;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post">
                        <div class="modal-header">
                            <h3 class="modal-title">Signup here!!</h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" >First Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" >Last Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" >Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" >Address:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" >Postal code:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter postal code" name="postal_code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="pwd">Phone Number:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter phone number" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="pwd">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="register" class="btn btn-success">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <h6>Already have account? Login now <a style="cursor: pointer; color: red;" href="" data-toggle="modal" data-target="#loginModal"> here </a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                        <a class="nav-link" href="" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>     
                </ul>
            </div>  
        </nav>