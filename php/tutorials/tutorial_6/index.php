<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-6</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="wrap m-5 bg-dark p-4 rounded">
        <div class="row">
            <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="photo" class="form-control">
                    <button class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
        <!-- /.row -->
        <div class="row">
            <?php if (isset($_GET['error'])) : ?>
                <div class="alert alert-warning">
                    Cannot upload file
                </div>
                <!-- /.alert -->
            <?php endif ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrap -->
</body>

</html>