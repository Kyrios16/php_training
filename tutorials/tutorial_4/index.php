<?php include 'login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial-5</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrap">

    <?php if( isset($_GET['login']) && $_GET['login'] == "failed"): ?>
        <div class="alert alert-danger">
            Login failed! User name or password incorrect.
        </div>
    <?php endif ?>

    <h3 class="mb-3 text-muted">Login</h3>
    <form action=" " method="post">
        <input
            type="text" 
            name="username"
            id="username"
            class="form-control mb-3"
            placeholder="Username" required
        >
        <input
            type="password" 
            name="password"
            id="password"
            class="form-control mb-3"
            placeholder="Password" required
        >
        <input class="btn btn-primary" type="submit" name="submit" value="Login">
    </form>   
  </div>
  <!-- /.wrap -->
</body>
</html>