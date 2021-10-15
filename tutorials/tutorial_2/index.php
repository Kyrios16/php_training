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
        *@param $num 
        */
        function starPattern($num) {
            for ($i = 1; $i <= $num; $i++) {
                for ($k = $num; $k > $i; $k--) {
                    echo '&nbsp; &nbsp;';
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo '*&nbsp;';
                }
                for ($j = $i-1; $j >= 1; $j--) {
                    echo '*&nbsp;';
                }
                echo '<br>';
            }
            for ($i = $num-1; $i > 0; $i--) {
                for ($k = $num-1; $k >= $i; $k--) {
                    echo '&nbsp; &nbsp;';
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo '*&nbsp;';
                }
                for ($j = $i-1; $j >= 1; $j--) {
                    echo '*&nbsp;';
                }
                echo '<br>';
            }
        }
        $num = 6;
        starPattern($num);   
    ?>   
</body>
</html>
