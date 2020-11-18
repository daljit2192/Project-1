<?php session_start();
include 'submit.php'; 

if(isset($_SESSION['loggedInUser'])){
    header("Location: index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Login</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/metisMenu.min.css" rel="stylesheet">
        <link href="./css/startmin.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
                                    Don't have account? Signup <a href="signup.php" >here</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/jquery.min.js"></script>

        <script src="./js/bootstrap.min.js"></script>

        <script src="./js/metisMenu.min.js"></script>

        <script src="./js/startmin.js"></script>

    </body>
</html>
