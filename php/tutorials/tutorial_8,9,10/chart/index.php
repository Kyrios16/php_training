<?php
include("../confs/config.php");
include("../confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-9 Graph</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container bg-light rounded p-5 my-5">
        <div class="row">
            <div class="h2 text-secondary mb-3 text-center">Salary Graph Of According Positions</div>
            <div id="columnchart_material" class="mb-3"></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../profile.php" class="btn btn-info me-md-2">Back To Profile</a>
                <a href="../_actions/logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="js/library/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['JobsTiTle', 'Salary'],
                ['Web Developer', 300000],
                ['Web Designer', 350000],
                ['Leader', 1000000],
                ['Manager', 1500000],
                ['CEO', 3000000]
            ]);

            var options = {
                chart: {
                    title: 'Employee Salary',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options))
        }
    </script>
</body>

</html>