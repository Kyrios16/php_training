<?php
session_start();
function auth()
{
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    } else {
        header("location: index.php");
    }
}
