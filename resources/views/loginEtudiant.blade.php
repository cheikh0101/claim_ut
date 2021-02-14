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

  <title>Connexion Etudiant</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="img/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 ">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Connexion <strong>Etudiant</strong></h3>
                <p class="mb-4">
                  Cet espace est dédié à la connexion en tant qu'étudiant.
                  <a href="/"> Acceuil? </a>
                </p>
              </div>
              <form action="loginEtudiant" method="post">
                @csrf
                @isset($message)
                    
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>{{$message}}!</strong> .
                    </div>
                @endisset
                <div class="form-group ">
                  <label for="username">Email</label>
                  <input type="email" placeholder="Email" required class="form-control" name="email">
                </div>
                <div class="form-group  mb-4">
                  <label for="password">Mot de Passe</label>
                  <input type="password" placeholder="Mot de Passe" required class="form-control" name="password">

                </div>

                <button class="btn text-white btn-block btn-primary" type="submit">Se Connecter</button>
                <small  > <a href="/" class="text-center" >Acceuil</a> </small>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>