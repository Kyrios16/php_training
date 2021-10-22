<?php

$error = $_FILES['photo']['error'];
$name = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

//check error 
if ($error) {
    header('location: ../index.php?error=file');
    exit();
}

//district image type and directory
if ($type === "image/jpeg" || $type === "image/jpg") {
    move_uploaded_file($tmp, 'imgs/jpg/' . $name . '.jpg');
    header('location: ../show.php');
} else if ($type === "image/png") {
    move_uploaded_file($tmp, 'imgs/png/' . $name . '.png');
    header('location: ../show.php');
} else {
    header('location: ../index.php?error=type');
}
