<?php 

var_dump($_FILES);

$name = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];

$typeOfDoc = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
$typeOfExc = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";
$typeOfCsv = "application/vnd.ms-excel";
$typeOftxt = "text/plain";

if($type === $typeOfExc || $type === $typeOfDoc || $type === $typeOfCsv || $type === $typeOftxt ) {
        move_uploaded_file($tmp, $name);
    } else {
        echo "Error";
}
