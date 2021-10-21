<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="text-center">
    <div class="wrap bg-primary rounded p-3">
        <div class="row">
            <?php if (isset($_GET['login']) && $_GET['login'] == "failed") : ?>
                <div class="alert alert-danger">
                    Login failed! Username or Password incorrect.
                </div>
            <?php endif ?>
        </div>
        <div class="row">
            <h3 class="mb-3 text-center text-light">Login</h3>
            <form action="_actions/login.php " method="post">
                <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Username" required>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>
                <input class="btn btn-success" type="submit" name="submit" value="Login">
                <a href="register.php" class="btn btn-info">Register</a>
            </form>
        </div>
    </div>
</body>

</html>