<?php

session_start();
include("../confs/config.php");

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));

$sql = "SELECT * FROM users 
        WHERE username = '$username' 
        AND password = '$password'";

$result = mysqli_query($conn, $sql);
$userInfo = mysqli_fetch_assoc($result);

if ($userInfo['username'] === "admin" && $userInfo['job'] === "CEO") {
    $_SESSION['user'] = $userInfo;
    header("location: ../manage.php");
} else if ($userInfo['username'] === $username && $userInfo['password'] === $password) {
    $_SESSION['user'] = $userInfo;
    header("location: ../profile.php");
} else {
    header("location: ../index.php?login=failed");
}
