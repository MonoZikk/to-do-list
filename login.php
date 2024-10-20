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
    <div class="container p-4 col-lg-6 col-md-8 col-sm-10 col-12"
      style="background: radial-gradient(at 10% 20%, #13072e,#3f2182);">
      <h1 class="text-light text-center mb-4">Login</h1>
      <div class="container">
        <form action="helper/login.php" method="POST">
          <div class="mb-3 d-flex justify-content-center">
            <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Email" name="email">
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <input type="password" class="form-control w-50" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="d-flex justify-content-center flex-column align-items-center">
            <button type="submit" class="btn btn-light p-2 mb-3 w-25" value="login"><strong>Login</strong></button>
            <p class="text-light text-center">No have account? <a href="register1.php" class="text-light">Register here</a>
            </p>
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