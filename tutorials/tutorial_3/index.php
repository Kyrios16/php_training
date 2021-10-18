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
    <?php 
        $START_YEAR = 1900;
        $END_YEAR = 2021;
    ?>    
    <form method="post">	
        <div class="age-calcu">
        <h2>Choose Your DOB</h2>
        <select name="yy">
            <option value="">Year</option>
            <?php
                //select option for birth year
                for($i = $START_YEAR; $i <= $END_YEAR; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>	
        <select name="mm">
            <option value="">Month</option>
            <?php
                //select option for birth month
                for($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="dd">
            <option value="">Date</option>
            <?php
                //select option for birth day
                for($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>	
        <input type="submit" name="sub" value="Check"/>
        </div>
        <!-- /.age-calcu -->
        <div class="show-msg">
            <?php
                /*
                *check and calculate age 
                */
                if (isset($_POST['sub'])) {
                    $mm = $_POST['mm'];
                    $dd = $_POST['dd'];
                    $yy = $_POST['yy'];

                    $dob = $mm."/".$dd."/".$yy;
                    $arr = explode('/',$dob);
                    
                    $dateTs = strtotime($dob);
                    if ($dateTs == 0 || sizeof($arr)!= 3 ) {
                        echo "Enter Your Valid DOB";
                        return;
                    }
                    $now = strtotime('today');
                    $ageDays = floor(($now-$dateTs)/86400);
                    $ageYears = floor($ageDays/365);
                    $ageMonths = floor(($ageDays-($ageYears*365))/30);
                    echo "You are age is " .$ageYears. " years, " .$ageMonths. " months old.";
                }
            ?>
        </div>
        <!-- /.show-msg -->
    </form>
</body>
</html>
