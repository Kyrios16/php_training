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
            <form action=" " method="post" enctype="multipart/form-data" class="input-group mb-3">
                <input type="file" name="fileUpload" id="file" class="form-control">
                <button type="submit" name="submit" class="btn btn-success">Upload</button>
            </form>
        </div>
        <div class="row">
            <?php
            require 'library/vendor/autoload.php';
            if (isset($_POST['submit'])) {
                $file = $_FILES['fileUpload'];
                $name = $_FILES['fileUpload']['name'];
                $type = $_FILES['fileUpload']['type'];
                $tmp = $_FILES['fileUpload']['tmp_name'];
                $error = $_FILES['fileUpload']['error'];
                if ($error !== 0) {
                    echo "<h5 class='alert alert-danger text-center'>Please Choose File</h5>";
                }
                $extension = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
                $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR;
                $path = 'files/';

                //If directory is not exit, create a new directory
                if (!file_exists($dir)) {
                    mkdir($dir);
                }

                $folderPath = $dir . $name;
                move_uploaded_file($tmp, $path . $name);

                if ($extension === "txt") {
                    $fileOpen = fopen($folderPath, "r");
                    while (!feof($fileOpen)) {
                        $content = fgets($fileOpen);
                        echo "<div class='bg-light rounded text-center'>" . $content . "</div>";
                    }
                    fclose($fileOpen);
                } else if ($extension === "xlsx") {
                    if ($xlsx = SimpleXLSX::parse($folderPath)) {
                        echo "<table border='1' cellpadding='3' style='border-collapse: collapse'>";
                        foreach ($xlsx->rows() as $r) {
                            echo "<tr><td>" . implode('"</td><td>"', $r) . "</td></tr>";
                        }
                        echo '</table>';
                    } else {
                        echo SimpleXLSX::parseError();
                    }
                } else if ($extension === "csv") {
                    $fileOpen = fopen($folderPath, "r");
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
                } else if ($extension === "doc") {
                    $fileHandle = fopen($folderPath, "r");
                    $line = @fread($fileHandle, filesize($folderPath));
                    $lines = explode(chr(0x0D), $line);
                    $outtext = "";
                    foreach ($lines as $thisline) {
                        $pos = strpos($thisline, chr(0x00));
                        if (($pos !== FALSE) || (strlen($thisline) == 0)) {
                        } else {
                            $outtext .= $thisline . " ";
                        }
                    }
                    $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", "", $outtext);
                    return $outtext;
                } else if ($extension === "docx") {
                    $fileHandle = fopen($folderPath, "r");
                    $line = @fread($fileHandle, filesize($folderPath));
                    $lines = explode(chr(0x0D), $line);
                    $outtext = "";
                    foreach ($lines as $thisline) {
                        $pos = strpos($thisline, chr(0x00));
                        if (($pos !== FALSE) || (strlen($thisline) == 0)) {
                        } else {
                            $outtext .= $thisline . " ";
                        }
                    }
                    $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", "", $outtext);
                    return $outtext;
                }
            }
            ?>
        </div>
    </div>
    <!-- /.wrap -->
</body>

</html>