<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_1</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table>
    <?php 
        $sizeOfChess = 8;
        for ($row = 1; $row <= $sizeOfChess; $row++) { 
    ?>
        <tr>
        <?php for ($col = 1; $col <= $sizeOfChess; $col++) {
            $total = $row + $col;
            if($total % 2 == 0) { 
        ?>
            <td class="white-cell"></td>
            <?php } else { ?>
                <td class="black-cell"></td>
            <?php } ?>
        <?php } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>