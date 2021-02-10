<!doctype html>
<html lang="en">
  <head>
    <title>Acceuil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body style="background-color: rgb(171, 183, 183)">

    <!-- Navigation -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
         <div class="container">
           <a class="navbar-brand" href="#">Claim_UT</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
           <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="/">Acceuil
                       <span class="sr-only">(current)</span>
                     </a>
               </li>
               <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Connexion
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/loginEtudiant"><i class='fas fa-user-graduate' style='font-size:24px'></i>&nbsp;Etudiant</a>
                    <a class="dropdown-item" href="/loginAdministration"><i class='fas fa-chalkboard-teacher'></i>&nbsp;Administration</a>
                  </div>
                </li>
             </ul>
           </div>
         </div>
       </nav>

       <!-- Page Content -->
       <div class="container">
         <div class="card border-0 shadow my-5">
           <div class="card-body p-5">
             <h1 class="font-weight-light"> Bienvenue dans Claim_UT.</h1>
             <p class="lead">
              <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
              <br>
              Cette plateforme a été conçu pour simplifier la gestion des réclamations des étudiants de l'université d'Iba Der Thiam de Thies.
              <div style="height: 180px;">
              </div>
            </p>
               <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
                <div class="container text-center">
                  <small>Copyright &copy; <a href="" type="button" data-toggle="modal" data-target="#moi"> ABF 2021 </a></small>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="moi">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title" style="color: black;">Informations</h4>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="card" style="color: black;">
                                <div class="card-body">
                                    <p class="card-text">Nom : FAM</p>
                                    <p class="">Prenom : Alioune Badara</p>
                                    <p class="">Email : abadara.fam@univ-thies.sn</p>
                                </div>
                            </div>
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                
                    </div>
                    </div>
                </div>
              </footer>
            </div>
         </div>
       </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
