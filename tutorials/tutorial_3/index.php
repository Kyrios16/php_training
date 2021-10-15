<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">	
        <div class="age-calcu">
        <h2>Choose Your DOB</h2>
        <select name="yy">
            <option value="">Year</option>
            <?php
                for($i=1900; $i<=2020; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>	
        <select name="mm">
            <option value="">Month</option>
            <?php
                for($i=1; $i<=12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="dd">
            <option value="">Date</option>
            <?php
                for($i=1; $i<=31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>	
        <input type="submit" name="sub" value="Check"/>
        </div>
        <div class="show-msg">
        <?php include 'calculate.php'; ?>
        </div>
    </form>
</body>
</html>