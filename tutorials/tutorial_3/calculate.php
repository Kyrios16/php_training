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
        $now = strtotime('today');
        $ageDays = floor(($now-$dateTs)/86400);
        $ageYears = floor($ageDays/365);
        $ageMonths = floor(($ageDays-($ageYears*365))/30);
        echo "You are age is " .$ageYears. " years, " .$ageMonths. " months old.";
    }
?>
