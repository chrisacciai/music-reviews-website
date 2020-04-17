<html>
<body>
<?php
session_start();
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    setcookie($username, $username, time() + 86400);

    include_once("./library.php");
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (empty($_POST["username"])) {
        $usernameErr = "This field is required";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "This field is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "This field is required";
    } else {
        $password = $_POST["password"];
    }

    if (!empty($username) && !empty($email) && !empty($password)) {

        mysqli_select_db($con, "Project1");
        $sql="INSERT INTO Account (username, email, password) VALUES ('$username','$email','$password')";

        if (!mysqli_query($con, $sql)) {
            exit('Error code:' . mysqli_error());
        }

        echo "<script type='text/javascript'>location.href = 'reviews.php';</script>";
        mysqli_close($con);
    }
    echo "<script>location.href = 'createAccount.php?usernameErr=$usernameErr&emailErr=$emailErr&passwordErr=$passwordErr';</script>";
?>
</body>
</html>

 