<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial8 Register</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="text-center">
	<div class="wrap bg-dark rounded p-3">
		<h1 class="h3 mb-3 text-light">Register</h1>

		<?php if (isset($_GET['error'])) : ?>
			<div class="alert alert-warning">
				Cannot create account. Please try again.
			</div>
		<?php endif ?>

		<form action="_actions/create.php" method="post" enctype="multipart/form-data" class="mb-2">
			<input type="text" name="username" class="form-control mb-2" placeholder="Name" required>
			<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
			<input type="text" name="job" class="form-control mb-2" placeholder="Job" required>
			<input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
			<textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
			<input type="text" name="salary" class="form-control mb-2" placeholder="Salary" required>
			<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
			<button type="submit" name="submit" class="w-50 btn btn-lg btn-outline-success">
				Register
			</button>
		</form>
		<a href="index.php" class="w-50 btn btn-outline-primary">Login</a>
	</div>
</body>

</html>