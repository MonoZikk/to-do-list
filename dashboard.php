<?php
include 'helper/koneksi.php';
session_start();
$id = $_SESSION['id']; // Get the user ID from the session

$query_tampil = "SELECT * FROM user WHERE id = '$id'";
$tampil = mysqli_query($db, $query_tampil);
$data = mysqli_fetch_array($tampil);

if (!isset($_SESSION['id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Halo <?php echo $data['first_name'] ?> <?php echo $data['last_name'] ?></h1>

    <form action="helper/logout.php" method="POST">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</body>

</html>