<?php
include 'helper/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['gender'] = $_POST['gender'];
}
// Menyimpan data halaman kedua (jika sudah dikirim dari register2.php)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['newpassword'] = $_POST['newpassword'];
    $_SESSION['confirmpassword'] = $_POST['confirmpassword'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #13072e;">

    <section class="vh-100 d-flex flex-column justify-content-center">
        <div class="container p-5 col-lg-6 col-md-8 col-sm-10 col-12"
            style="background: radial-gradient(at 10% 20%, #13072e,#3f2182);">
            <h1 class="text-light text-start mb-4">Register</h1>
            <div class="container">
                <form action="helper\add.php" method="post">
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col">
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="New Password" name="newpassword">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Confirm Password" name="confirmpassword">
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-light" onclick="window.location.href='register1.php'">Back</button>
                        <button type="submit" class="btn btn-light">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>