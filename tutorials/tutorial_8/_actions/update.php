<?php
include("../confs/config.php");

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

if (gettype($_POST['submit']) === 'array') {
    header("location: ../edit.php?update=failed");
} else {
    $sql = "UPDATE users SET 
        username='$username', email = '$email', phone = '$phone', 
        address = '$address', password = '$password', updated_at = now() 
        WHERE id = $id";
}



mysqli_query($conn, $sql);
header("location: ../profile.php");
