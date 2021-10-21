<?php
include("../confs/config.php");

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, phone, address, password, created_at, updated_at) 
		VALUES ('$username',' $email', $phone, '$address', '$password', now(), now())";

mysqli_query($conn, $sql);
header("location: ../index.php");
