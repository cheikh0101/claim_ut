<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login Administration</title>
  </head>
  <body>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 ">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Administration</h3>
              <p class="mb-4">Cet espace est dédié à la connexion en tant qu'administrateur.</p>
            </div>
            <form action="loginAdministration" method="post">
              @csrf
              @isset($message)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong> {{$message}} !</strong>.
                </div>     
              @endisset
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" placeholder="Email" required class="form-control" name="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Mot de Passe</label>
                <input type="password" placeholder="Mot de Passe" required class="form-control" name="password">
                
              </div>
              <button type="submit" class="btn btn-block btn-primary" style="background-color: rgb(140,20,252);">Se Connecter</button>
            </form>
           
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>