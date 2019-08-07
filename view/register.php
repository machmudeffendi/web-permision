<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Offline Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- My Css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- icon -->
    <link rel="icon" type="image/png" href="../assets/img/profile.png">
    <title>RHAV | Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center mt-5">
            <img src="../assets/img/logo.png" class="logo-login text-center">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 m-auto">
          <form action="priv/process-register.php" method="post">
            <div class="card mt-5">
              <div class="card-body text-center shadow">
                <label>REGISTER</label>
                <input type="text" name="username" class="form-control mb-1" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                <!-- <input type="password" name="password" class="form-control mb-3" placeholder="Retype Password"> -->
                <input type="submit" class="btn btn-warning btn-block shadow mb-1" value="Sign Up">
                <a href="form-login.php" class="btn btn-register btn-block mb-2">Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-5">
          <div class="text-center">
            <footer class="mt-5">RHAV &copy Copyright | 2019 v.1</footer>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>