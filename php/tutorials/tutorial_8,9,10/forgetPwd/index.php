<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("library/PHPMailer/src/Exception.php");
require("library/PHPMailer/src/PHPMailer.php");
require("library/PHPMailer/src/SMTP.php");
include("../confs/config.php");

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $code = uniqid(true);
    $query = mysqli_query($conn, "INSERT INTO resetPwdCodes (code, email) VALUES ('$code', '$email')");
    if (!$query) {
        echo "Mysql query is empty";
    }
    $mail = new PHPMailer(true);
    try {
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'testkaung16@gmail.com';
        $mail->Password = 'kaungkaung16';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setfrom('testkaung16@gmail.com', 'Kaung Khant Naing');
        $mail->addaddress($email);
        $mail->addreplyto('testkaung16@gmail.com');

        //Content
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPwd.php?code=$code";
        $mail->isHTML(true);
        $mail->Subject = "Your Password Reset Link";
        $mail->Body    = "<h1>Your requested a password reset</h1>
                            Click <a href='$url'>this link</a> to do so";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "Reset password has been sent to your email";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Request</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-secondary text-center">
    <div class="wrap bg-light rounded p-3">
        <div class="row">
            <h3 class="mb-3 text-center text-dark">Enter Your Email</h3>
            <form action=" " method="post">
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" autocomplete="off">
                <input class="btn btn-success" type="submit" name="submit" value="Send">
                <a href="../index.php" class="btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</body>

</html>