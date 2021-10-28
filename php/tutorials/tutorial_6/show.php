<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-6 Show</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php if (!isset($_GET['error'])) : ?>
        <div class="bg-light rounded text-center m-5">
            <h5 class="alert alert-success">Image File Uploaded Successfully</h5>
        </div>
    <?php endif ?>
</body>

</html>