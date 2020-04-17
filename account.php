<?php
session_start();
if (isset($_SESSION["username"]) == FALSE) {
    header("location: index.html");
}
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
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link">About</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link">Help</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30%;">
                        <a class="nav-link active">Account</a>
                    </li>
                </ul>
            </div>
        </nav>
        <p style="font-family: AvenirNext; font-size: 20px; margin-left:80px; margin-top:40px; margin-bottom:-16px">My Information</p>
        <?php
            include_once("./library.php");
            $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $username = $_SESSION['username'];
            $sql = "SELECT Username, Email, Password FROM Account WHERE Username='$username'";
            $result = mysqli_query($con,$sql);

            while ($row = mysqli_fetch_array($result)) {
                echo "<p style='font-family: AvenirNext; font-size: 17px; margin-left:80px; margin-top:30px; margin-bottom:-23px'>Username: ". $row['Username'] .
                "<button onclick='editUsername();this.blur()' style='color:#24ac4c' class='btn btn-default btn-xs'>Edit</button>
                </p>
                <form method='post' action='updateUsername.php' style='display:none; margin-bottom:-10px' id='form1'>
                <input style='width:200px; margin-left: 80px; margin-top: 22px' name='username' class='form-control' id='username'>
                <button onclick='this.blur()' style='margin-left: 80px' class='btn btn-default btn-sm'>Update</button>
                </form>
                <p style='font-family: AvenirNext; font-size: 17px; margin-left:80px; margin-top:30px; margin-bottom:-23px'>Email: ". $row['Email'] ."
                <button onclick='editUsername1();this.blur()' style='color:#24ac4c' class='btn btn-default btn-xs'>Edit</button>
                </p>
                <form method='post' action='updateEmail.php' style='display:none; margin-bottom:-10px' id='form2'>
                <input style='width:200px; margin-left: 80px; margin-top: 22px' class='form-control' name='email' id='email'>
                <button onclick='this.blur()' type='submit' style='margin-left: 80px' class='btn btn-default btn-sm'>Update</button>
                </form>
                <p id='lastP' style='font-family: AvenirNext; font-size: 17px; margin-left:80px; margin-top:30px; '>Password: ". $row['Password'] . "
                <button onclick='editUsername2();this.blur()' style='color:#24ac4c' class='btn btn-default btn-xs'>Edit</button>
                </p>
                <form method='post' action='updatePassword.php' style='display:none' id='form3'>
                <input style='width:200px; margin-left: 80px; margin-top: 22px' name='username' class='form-control' id='username3'>
                <button onclick='this.blur()' style='margin-left: 80px' class='btn btn-default btn-sm'>Update</button>
                </form>";
            }
            mysqli_close($con);
        ?>
        <hr style="margin-left: 80px; margin-right: 80px; margin-top: 28px; margin-bottom: -5px;">
        <p style="font-family: AvenirNext; font-size: 20px; margin-left:80px; margin-top:40px; margin-bottom:-10px">My Reviews</p>
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
        <script>
            function editUsername() {
                var btn = document.getElementById("form1");
                if (btn.style.display === "none") {
                    btn.style.display = "block";
                } else {
                    btn.style.display = "none";
                }
            }
        </script>
        <script>
            function editUsername1() {
                var btn = document.getElementById("form2");
                if (btn.style.display === "none") {
                    btn.style.display = "block";
                } else {
                    btn.style.display = "none";
                }
            }
        </script>
        <script>
            function editUsername2() {
                var btn = document.getElementById("form3");
                var lastP = document.getElementById("lastP")
                
                if (btn.style.display === "none") {
                    btn.style.display = "block";
                    lastP.style.marginBottom = "-23px"
                } else {
                    btn.style.display = "none";
                    lastP.style.marginBottom = "0px"
                }
            }
        </script>
    </body>
</html>