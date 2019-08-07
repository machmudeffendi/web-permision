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
    <title>RHAV | Permision</title>
  </head>
  <body>
    <div class="container">


      <!-- navbar -->
      <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
        <img src="../assets/img/logo.png" class="logo ml-2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="permision.php">Permision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-2" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- end navbar -->



      <!-- header -->
      <h2 class="text-center">Permision</h2>
      <hr>
      <!-- end header -->



      <!-- content -->
      <div class="row mt-5">
        <!-- main -->
        <div class="col-lg-8 col-sm-12">
          <div class="card mt-1">
            <div class="card-body">
              <label>Permision</label>
              <table class="table table-dark">                
                <thead>
                  <tr>
                    <th class="pl-5">USERNAME</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include"connection.php";
                  $query=mysql_query("select*from temporary_user");
                  while($data=mysql_fetch_array($query)) 
                  {
                  ?>
                  <tr>
                    <td class="pl-5"><?php echo $data[0] ?></td>
                    <td><button class="btn btn-warning">Accept</button></td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- end main -->


        <!-- user profile -->
        <div class="col-lg-4 col-sm-12">
          <div class="card mt-1">
            <div class="card-body">
              <label>User</label>
              <input type="text" name="username" class="form-control" value="" readonly>
            </div>
          </div>
        </div>
        <!-- end user profile -->
      </div>
      <!-- end content -->



      <!-- footer -->
      <footer class="fixed-bottom text-center text-light bg-dark">
        <div class="p-1">
          RHAV &copy Copyright | 2019 v.1
        </div>
      </footer>
      <!-- end footer -->
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>