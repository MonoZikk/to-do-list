<?php 
    session_start();
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
                <form action="register2.php" method="post">
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="First Name" name="firstname" value="<?php echo isset($_SESSION['firstname']) ? $_SESSION['firstname'] : ''; ?>" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Last Name" name="lastname" value="<?php echo isset($_SESSION['lastname']) ? $_SESSION['lastname'] : ''; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="date" value="<?php echo isset($_SESSION['date']) ? $_SESSION['date'] : ''; ?>" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="No. Handphone" name="phone" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="text-light">Gender</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male') echo 'checked'; ?> required>
                        <label class="form-check-label text-light" for="flexRadioDefault1" >
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female') echo 'checked'; ?> required>
                        <label class="form-check-label text-light" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-light" onclick="window.location.href='helper/destroy_register.php'">Cancel</button>
                        <button type="submit" class="btn btn-light">Next</button>
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