<?php include '_actions/login.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoril-4 Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrap profile-sec mt-5 bg-secondary rounded p-2">
        <?php if (isset($_SESSION['userData'])) : ?>
            <div class="alert alert-success">
                You are successfully login.
            </div>
        <?php endif ?>
        <a href="_actions/logout.php" class="btn btn-danger">Logout</a>
    </div>
    <!-- /.wrap -->
</body>

</html>