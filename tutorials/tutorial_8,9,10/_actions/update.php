<?php
include("../confs/config.php");

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$job = $_POST['job'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$sql = "UPDATE users SET 
        username='$username', email = '$email', job = '$job', 
        phone = '$phone', address = '$address', salary = '$salary', updated_at = now() 
        WHERE id = $id";

mysqli_query($conn, $sql);
header("location: ../manage.php");
