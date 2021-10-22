<?php
include("../confs/config.php");

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$job = $_POST['job'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$password = md5($_POST['password']);

$sql = "UPDATE users SET 
        username='$username', email = '$email', job = '$job', 
        phone = '$phone', address = '$address', salary = '$salary', 
        password = '$password', updated_at = now() 
        WHERE id = $id";

mysqli_query($conn, $sql);
header("location: ../manage.php");
