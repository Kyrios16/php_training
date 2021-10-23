<?php
include("../confs/config.php");

if (!isset($_GET['code'])) {
    echo "Can't Find Page";
}

$code = $_GET['code'];
$getEmailQuery = mysqli_query($conn, "SELECT email FROM resetPwdCodes
                WHERE code = '$code'");

if (mysqli_num_rows($getEmailQuery) == 0) {
    echo "Can't Find Page";
}

if (isset($_POST['newPassword'])) {
    $newPassword = md5($_POST['newPassword']);
    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row['email'];
    echo $email;

    $query = mysqli_query($conn, "UPDATE users SET password = '$newPassword' WHERE email = '$email'");

    if ($query) {
        $deleteCodeQuery = mysqli_query($conn, "DELETE FROM resetPwdCodes WHERE code = '$code'");
        echo "Password Update";
    } else {
        echo "Something Wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-secondary text-center">
    <div class="wrap bg-light rounded p-3">
        <div class="row">
            <h3 class="mb-3 text-center text-dark">Enter Your New Password</h3>
            <form action=" " method="post">
                <input type="password" name="newPassword" id="newPassword" class="form-control mb-3" placeholder="New Password">
                <input class="btn btn-success" type="submit" name="submit" value="Update Password">
                <a href="../index.php" class="btn btn-primary">Back To Login</a>
            </form>
        </div>
    </div>
</body>

</html>