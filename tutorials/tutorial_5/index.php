<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-5</title>
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
            include('library/SimpleXLSX.php');
            if (isset($_REQUEST['submit'])) {
                $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR;
                $path = 'files/';
                //If directory is not exit, create a new directory
                if (!file_exists($dir)) {
                    mkdir($dir);
                }
                $extension = pathinfo($_FILES['fileUpload']['name'])['extension'];
                $name = $_FILES['fileUpload']['name'];
                $type = $_FILES['fileUpload']['type'];
                $tmp = $_FILES['fileUpload']['tmp_name'];
                $fileName = $dir . $name;

                if (move_uploaded_file($tmp, $path . $name)) {
                    echo "<h5 class='alert alert-success text-center'>File Upload Success</h5>";
                } else {
                    echo "<h5 class='alert alert-danger text-center'>Try Again, File Upload Fail</h5>";
                }
                $fileOpen = fopen($fileName, "r");
                if ($extension === "txt") {
                    while (!feof($fileOpen)) {
                        $content = fgets($fileOpen);
                        echo "<div class='bg-light rounded text-center'>" . $content . "</div>";
                    }
                    fclose($fileOpen);
                } else if ($extension === "csv") {
                    $row = 1;
                    while (($data = fgetcsv($fileOpen, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                        for ($i = 0; $i < $num; $i++) {
                            echo "<div class='bg-light rounded text-center'>";
                            echo $data[$i] . "<br>\n";
                            echo "</div>";
                        }
                    }
                    fclose($fileOpen);
                } else if ($extension === "xlsx") {
                    if ($xlsx = SimpleXLSX::parse($fileName)) {
                        echo "<table class='table table-dark table-striped' >";
                        foreach ($xlsx->rows() as $r) {
                            echo "<tr><td>" . implode("</td><td>", $r) . "</td></tr>";
                        }
                        echo '</table>';
                    } else {
                        echo SimpleXLSX::parseError();
                    }
                } else if ($extension === "doc" || $extension === "docx") {
                    $line = fread($fileOpen, filesize($fileName));
                    $multiLine = explode(chr(0x0D), $line);
                    $outText = "";
                    foreach ($multiLine as $thisline) {
                        $pos = strpos($thisline, chr(0x00));
                        if (($pos !== FALSE) || (strlen($thisline) == 0)) {
                        } else {
                            $outText .= $thisline . " ";
                        }
                    }
                    $outText = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", "", $outText);
                    echo "<div class='bg-light rounded text-center'>" . $outText . "</div>";
                }
            }
            ?>
        </div>
    </div>
    <!-- /.wrap -->
</body>

</html>