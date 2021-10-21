<?php
include("../confs/config.php");
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
                <a href="../_actions/logout.php" class="btn btn-warning me-md-2">logout</a>
                <a href="../profile.php" class="btn btn-dark">Back</a>
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
                <?php
                $sql = "SELECT * FROM users";
                $query = mysqli_query($conn, $sql);
                while ($result = mysqli_fetch_assoc($query)) {
                    foreach ($result as $job) {
                        if ($job === "Web Developer") {
                            $jobDev = "Web Developer";
                        } else if ($job === "Web Designer") {
                            $jobDeg = "Web Designer";
                        } else if ($job === "Leader") {
                            $jobLdr = "Leader";
                        } else if ($job === "Manager") {
                            $jobMgr = "Manager";
                        }
                    }
                }
                ?>['<?php echo $jobDev ?>', 300000],
                ['<?php echo $jobDeg ?>', 350000],
                ['<?php echo $jobLdr ?>', 1000000],
                ['<?php echo $jobMgr ?>', 1500000]
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