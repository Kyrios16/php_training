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
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="input-group">
            <input type="file" name="file" class="form-control">
            <input type="submit" value="Import File" class="btn btn-secondary">
        </form>
        <?php if(file_exists('_actions/photos/profile.jpg')): ?>
            <img 
                class="img-thumbnail mb-3"
                src="_actions/photos/profile.jpg"
                alt="Profile Photo" width="200"
            >
        <?php endif ?>
    </div>
</body>

</html>