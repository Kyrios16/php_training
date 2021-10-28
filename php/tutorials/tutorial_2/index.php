<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_2</title>
</head>
<body>
    <?php
        /*
        *create star pattern 
        *@param $row 
        */
        function starPattern($row) {
            for ($i = 1; $i <= $row; $i++) {
                for ($numOfSpace = $row; $numOfSpace > $i; $numOfSpace--) {
                    echo '&nbsp; &nbsp;';
                }
                for ($numOfStar = 1; $numOfStar <= $i; $numOfStar++) {
                    echo '*&nbsp;';
                }
                for ($numOfStar = $i-1; $numOfStar >= 1; $numOfStar--) {
                    echo '*&nbsp;';
                }
                echo '<br>';
            }
            for ($i = $row-1; $i > 0; $i--) {
                for ($numOfSpace = $row-1; $numOfSpace >= $i; $numOfSpace--) {
                    echo '&nbsp; &nbsp;';
                }
                for ($numOfStar = 1; $numOfStar <= $i; $numOfStar++) {
                    echo '*&nbsp;';
                }
                for ($numOfStar = $i-1; $numOfStar >= 1; $numOfStar--) {
                    echo '*&nbsp;';
                }
                echo '<br>';
            }
        }
        starPattern(6);   
    ?>   
</body>
</html>
