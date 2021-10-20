<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-7</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="wrap m-5 bg-secondary p-4 rounded">
        <div class="row">
            <form action=" " method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="fileUpload" id="file" class="form-control">
                    <button type="submit" name="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
        <div class="row">
            <?php
            include('library/phpqrcode/qrlib.php');
            //check validate and create QR code image
            if (isset($_REQUEST['submit'])) {
                $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR;
                $path = 'imgs/';
                //If directory is not exit, create a new directory
                if (!file_exists($dir)) {
                    mkdir($dir);
                }

                $extension = pathinfo($_FILES['fileUpload']['name'])['extension'];
                $name = $_FILES['fileUpload']['name'];
                $type = $_FILES['fileUpload']['type'];
                $tmp = $_FILES['fileUpload']['tmp_name'];
                move_uploaded_file($tmp, $name);
                $fileData = " ";
                $handle = fopen($name, "r");
                if ($extension === "txt") {
                    $fileData = fgets($handle, 4096);
                    fclose($handle);
                } else if ($extension === "csv") {
                    $data = file($name);
                    $fileData = implode(' ', $data);
                }

                $fileName = $dir . time() . '.png';
                $content = $fileData;
                $frameSize = 5;
                QRcode::png($content, $fileName, $frameSize);
            }
            ?>
        </div>
    </div>
    <!-- /.wrap -->
</body>

</html>