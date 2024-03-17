<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: register.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Welcome, <?= $_SESSION['firstname']; ?></h1>
                <a href="courses.php" class="btn btn-primary">Courses</a><a href="logout.php" class="btn btn-primary">Logout</a>
                <hr>
                <h3>Your Information</h3>
                <table class="table">
                    <?php foreach ($_SESSION as $keys => $value): ?>
                        <tr>
                            <th> <?= ucfirst($key); ?> </th>
                            <td> <?= $value; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
