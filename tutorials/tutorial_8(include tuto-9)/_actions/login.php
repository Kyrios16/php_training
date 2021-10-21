<?php
include "../confs/config.php";
session_start();

//check validate usernme and passowrd
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $myUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $myPassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$myUsername' and password = '$myPassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['auth'] = true;
        header("location: ../profile.php");
    } else {
        header("location: ../index.php?login=failed");
    }
}
