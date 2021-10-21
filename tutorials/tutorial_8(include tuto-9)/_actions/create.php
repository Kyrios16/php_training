<?php
include("../confs/config.php");

$username = $_POST['username'];
$email = $_POST['email'];
$job = $_POST['job'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, job, phone, address, salary, password, created_at, updated_at) 
		VALUES ('$username',' $email', '$job', $phone, '$address', '$salary', '$password', now(), now())";

mysqli_query($conn, $sql);
header("location: ../index.php");
