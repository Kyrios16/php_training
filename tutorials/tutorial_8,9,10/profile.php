<?php
include("confs/config.php");
include("confs/auth.php");

$auth = auth();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="justify-content-center">
	<div class="container w-50 bg-secondary rounded mt-5 py-5">
		<div class="row">
			<div class="col-md-6">
				<h1 class="text-light mb-5">
					<?php echo $auth['username']; ?>
				</h1>
			</div>
			<div class="col-md-6 pt-2">
				<a href="chart/index.php" class="btn btn-info float-end">Show Graph</a>
			</div>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<b>Email:</b> <?php echo $auth['email']; ?>
			</li>
			<li class="list-group-item">
				<b>Position:</b> <?php echo $auth['job']; ?>
			</li>
			<li class="list-group-item">
				<b>Phone:</b> <?php echo $auth['phone']; ?>
			</li>
			<li class="list-group-item">
				<b>Salary:</b> <?php echo $auth['salary']; ?>
			</li>
			<li class="list-group-item">
				<b>Address:</b> <?php echo $auth['address']; ?>
			</li>
		</ul>
		<br>
		<a href="_actions/login.php" class="btn btn-outline-primary text-light">Admin Panel</a> |
		<a href="_actions/logout.php" class="btn btn-outline-warning text-light">Logout</a>
	</div>
</body>

</html>