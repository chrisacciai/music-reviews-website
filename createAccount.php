<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesheet.css">
                        
        <title>Critiqueue</title>
    </head>
    <body>
        <div class="card" style="margin-left: 25%; margin-right: 25%; margin-top: 2.5%;">
            <div id="mainCard" class="card-body">
                <form method="post" action="insert.php">
                    <img src="images/logo.png" class="mr-3" alt="logo" height="70">
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" class="form-control" id="username" placeholder="Enter username">
                        <span style="color:red"><?php $usernameErr = ""; if (isset($_GET['usernameErr'])) $usernameErr = $_GET['usernameErr']; echo $usernameErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" class="form-control" id="email" placeholder="Enter email">
                        <span style="color:red"><?php $emailErr = ""; if (isset($_GET['emailErr'])) $emailErr = $_GET['emailErr']; echo $emailErr;?></span>
                    </div>
                    <div class="form-group" style="margin-bottom: 25px">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" class="form-control" id="password" placeholder="Enter password">
                        <span style="color:red"><?php $passwordErr = ""; if (isset($_GET['passwordErr'])) $passwordErr = $_GET['passwordErr'];  echo $passwordErr;?></span>
                    </div>
                    <button id="createAccountBtn" type="submit" class="btn btn-success">Create Account</button>
                    <hr style="margin: auto; margin-top: 28px; margin-bottom: 19px;">
                    <p>Already have an account?</p>
                    <button class="btn btn-outline-success">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>