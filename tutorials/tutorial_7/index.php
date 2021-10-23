<?php
include('library/phpqrcode/qrlib.php');
if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
    $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
    $dir = 'uploads/';

    if (!file_exists($PNG_TEMP_DIR)) {
        mkdir($PNG_TEMP_DIR);
    }

    $filename    =    $dir . time() . uniqid('-QR-') . '.png';
    $errorCorrectionLevel = $_REQUEST['level'];
    $matrixPointSize = $_REQUEST['size'];
    $contentData    =    $_REQUEST['userdata'];

    QRcode::png($contentData, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-7 Create QR Code</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-secondary">
    <div class="wrap bg-light p-4 rounded">
        <div class="row">
            <?php if (isset($contentData) && $contentData != " ") : ?>
                <div class="alert alert-success">QR created for <strong>[<?php echo $contentData; ?>]</strong></div>
                <div class="text-center"><img src="<?php echo $dir . basename($filename); ?>" alt="QR Code Image" /></div>
            <?php endif ?>
            <form method="post">
                <div class="form-group my-3" enctype="multipart/form-data">
                    <label>Create QR</label>
                    <input type="text" name="userdata" id="userdata" placeholder="Enter URL and create QR" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>QR Code Level</label>
                    <select name="level" class="form-control">
                        <option value="L">L - smallest</option>
                        <option value="M" selected="">M</option>
                        <option value="Q">Q</option>
                        <option value="H">H - best</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label>QR Code Size</label>
                    <select name="size" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Upload" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
    <!-- /.wrap -->
</body>

</html>