<?php
include "confs/auth.php";
include "confs/config.php";

$result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8 Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-secondary">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-light">User's Information List</h2>
            </div>
            <div class="col-md-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="chart/index.php" class="btn btn-primary me-md-2">Show Graph</a>
                    <a href="register.php" class="btn btn-info text-light">Add New Information</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <table class="table table-dark table-hover table-bordered text-center">
                <tr>
                    <th>ID</th>
                    <th>Userame</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['job']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['salary']; ?></td>
                        <td>
                            <a href="_actions/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger" onClick="return confirm('Are you sure?')">
                                Delete
                            </a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-warning">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
        <a href="_actions/logout.php" class="btn btn-warning me-md-2 float-end">logout</a>
    </div>
</body>

</html>