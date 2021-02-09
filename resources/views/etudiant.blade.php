<!doctype html>
<html lang="en">
  <head>
    <title>Tableau de Bord</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/tb.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body id="page-top">

          <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: rgb(103, 128, 159)" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-block"> &hearts; {{$etudiant->prenom}} {{$etudiant->nom}} &hearts;</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><i class="fas fa-circle-notch fa-spin"></i>Profil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reclamation"><i class="fas fa-circle-notch fa-spin"></i>Reclamation</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/"><i class="fas fa-circle-notch fa-spin"></i>Acceuil?</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/loginEtudiant"><i class="fas fa-circle-notch fa-spin"></i>Deconnexion</a></li>
                </ul>
            </div>
        </nav>

          <!-- Page Content-->
          <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    @isset($message)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong> &hearts; {{$message}} &hearts; </strong> 
                    </div>
                      <script>
                        $(".alert").alert();
                      </script>    
                    @endisset

                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Nom
                                </div>
                               <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$etudiant->nom}}</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Prenom
                                </div>
                               <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$etudiant->prenom}}</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Email
                                </div>
                               <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$etudiant->email}}</li>
                              </ul>
                           </div>        
                        </div>
                    </div>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="reclamation">
                <div class="resume-section-content">
                    
                   
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-2">Faites votre reclamation</h2>
                        </div>
                        <div class="card-body shadow">
                            <form action="/reclamation{{$etudiant->id}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col">
                                        <div class="form-group">
                                          <label for="">Matière</label>
                                          <select class="form-control" name="matiere" id="">
                                            <option>Systèmes d'Exploitation</option>
                                            <option>Algorithme et Programmation 1</option>
                                            <option>Algèbre 1</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Semestre</label>
                                            <select class="form-control" name="semestre" id="">
                                              <option>SEMESTRE 1</option>
                                              <option>SEMESTRE 2</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Evaluation</label>
                                            <select class="form-control" name="evaluation" id="">
                                              <option>Devoir</option>
                                              <option>Examen Premier Semestre</option>
                                              <option>Examen Second Semestre</option>
                                            </select>
                                          </div>
                                        <div class="form-group">
                                          <label for="">Commentaire</label>
                                          <textarea class="form-control" name="commentaires" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                                <div class="row mt-3">
                                    <button class="btn btn-outline-primary btn-block">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
                <div class="container text-center">
                  <small>Copyright &copy; <a href="" type="button" data-toggle="modal" data-target="#moi"> ABF 21 </a></small>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="moi">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Informations</h4>
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>