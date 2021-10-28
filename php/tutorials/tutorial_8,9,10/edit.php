<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8 Edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="text-center">
    <?php
    include("confs/config.php");

    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="wrap bg-dark rounded p-3">
        <h1 class="h3 mb-2 text-light">Edit Info</h1>
        <span class="text-muted">(Please Refill All Info)</span>
        <?php if (isset($_GET['update']) && $_GET['update'] == "failed") : ?>
            <div class="alert alert-danger">
                Please Refill.
            </div>
        <?php endif ?>
        <form action="_actions/update.php" method="post" class="my-2">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="text" name="username" class="form-control mb-2" value="<?php echo $row['username'] ?>" required>
            <input type="email" name="email" class="form-control mb-2" value="<?php echo $row['email'] ?>" required>
            <input type="text" name="job" class="form-control mb-2" value="<?php echo $row['job'] ?>" required>
            <input type="text" name="phone" class="form-control mb-2" value="<?php echo $row['phone'] ?>" required>
            <textarea name="address" class="form-control mb-2" placeholder="<?php echo $row['address'] ?>" required></textarea>
            <input type="text" name="salary" class="form-control mb-2" value="<?php echo $row['salary'] ?>" required>
            <input type="submit" name="submit" class="w-50 btn btn-lg btn-outline-success" value="Update" />
        </form>
        <a href="profile.php" class="w-50 btn btn-outline-primary">Back</a>
    </div>
</body>

</html>