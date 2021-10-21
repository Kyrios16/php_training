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

<body">
    <div class="container">

        <div class="row justify-content-center my-3">
            <h3 class="text-dark">User's Information List</h3>
            <table class="table table-dark table-hover table-bordered text-center">
                <tr>
                    <th>ID</th>
                    <th>Userame</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="_actions/logout.php" class="btn btn-warning me-md-2">logout</a>
            <a href="register.php" class="btn btn-info">Register</a>
        </div>

    </div>
    </body>

</html>