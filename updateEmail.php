<html>
<body>
<?php
    session_start();

    function redirectAccount() {
        echo "<script>location.href = 'account.php';</script>";
    }

    include_once("./library.php");
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $username = $_SESSION['username'];
    mysqli_select_db($con, "Project1");
    $sql="UPDATE Account SET Email='$_POST[email]' WHERE Username='$username'";

    if (!mysqli_query($con, $sql)) {
        exit('Error code:' . mysqli_error());
    }
    redirectAccount();
    mysqli_close($con)
?>
</body>
</html>