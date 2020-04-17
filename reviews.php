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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="media" style="margin-left: 11.5%; margin-top: 10px;">
                    <img src="images/logo.png" class="mr-3" alt="logo" height="70">
                </div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item" style="margin-left: 20%;">
                        <a class="nav-link">Create</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link active" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link">About</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link">Help</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link" href="account.php">Account</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/ginger.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Why Brockhampton's GINGER fails to rise to the hype</h4>
                            <p class="card-text">By: Luke Corey</p>
                            <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card" id="kaytranada">
                        <img class="card-img-top img-fluid" id="kaytranada" src="images/kaytranada.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Reviewing Kaytranadas new album BUBBA</h4>
                            <p class="card-text">By: Cameron Thanser</p>
                            <p class="card-text"><small class="text-muted">16 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/album.png" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Best albums of the decade</h4>
                            <p class="card-text">By: Simon Lewis</p>
                            <p class="card-text"><small class="text-muted">24 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/gorrilaz.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Reliving Gorillaz Demon Days</h4>
                            <p class="card-text">By: Isabella Renault</p>
                            <p class="card-text"><small class="text-muted">1 hour ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/tampe.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Review of Tame Impala's The Slow Rush</h4>
                            <p class="card-text">By: Randall Kane</p>
                            <p class="card-text"><small class="text-muted">2 hours ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/xxx.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">In memory of XXXTENTACION</h4>
                            <p class="card-text">By: Riley Shepard</p>
                            <p class="card-text"><small class="text-muted">2 hours ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 3%">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/grateful.jpg" alt="card">
                        <div class="card-body">
                            <h4 class="card-title">Dead in the Head</h4>
                            <p class="card-text">By: Zion Melly</p>
                            <p class="card-text"><small class="text-muted">3 hours ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>