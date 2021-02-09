<!doctype html>
<html lang="en">
  <head>
    <title>Tableau de Bord</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <span class="d-block d-lg-block">&hearts;{{$administration->prenom}} {{$administration->nom}} &hearts;</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Profil</a></li>
                    <hr class="m-0" />
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reclamation">Toutes les reclamations</a></li>
                    <hr class="m-0" />
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#semestre3">Semestre 1</a></li>
                    <hr class="m-0" />
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#semestre4">Semestre 2</a></li>
                    <hr class="m-0" />
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">Retourner à l'acceuil?</a></li>
                    <hr class="m-0" />
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/loginAdministration">Déconnexion</a></li>
                </ul>
            </div>
        </nav>

          <!-- Page Content-->
          <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                 <h4 class="card-title">Nom</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$administration->nom}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                 <h4 class="card-title">Prenom</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$administration->prenom}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                 <h4 class="card-title">Fonction</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$administration->fonction}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                  <br>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="reclamation">
                <div class="resume-section-content">
                   
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-5">Toutes les réclamations avec l'Etudiant correspondant</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Evaluation</th>
                                                <th>Semestre</th>
                                                <th>Arguments</th>
                                                <th>Matiere</th>
                                                <th>Création</th>
                                                <th colspan="3">Infos Etudiants</th>
                                            </tr>
                                            
                                        </thead>
                                        @foreach ($etudiants as $reclamation)
                                        <tr>
                                            <td>{{$reclamation->evaluation}}</td>
                                            <td>{{$reclamation->semestre}}</td>
                                            <td>{{$reclamation->commentaire}}</td>
                                            <td>{{$reclamation->matiere}}</td>
                                            <td>{{$reclamation->created_at}}</td>
                                            <td> {{$reclamation->prenom}} </td>
                                            <td> {{$reclamation->nom}} </td>
                                            <td> {{$reclamation->email}} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <section class="resume-section" id="semestre3">
                <div class="resume-section-content">
                    <h1>
                        <b>
                            Liste des reclamations du semestre 1
                        </b>
                    </h1>
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Evaluation</th>
                                <th>Semestre</th>
                                <th>Arguments</th>
                                <th>Matiere</th>
                                <th>Création</th>
                            </tr>
                        </thead>
                        @foreach ($reclamations1 as $reclamation1)
                        <tr>
                            <td>{{$reclamation1->evaluation}}</td>
                            <td>{{$reclamation1->semestre}}</td>
                            <td>{{$reclamation1->commentaire}}</td>
                            <td>{{$reclamation1->matiere}}</td>
                            <td>{{$reclamation1->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </section>
            <section class="resume-section" id="semestre4">
                <div class="resume-section-content">
                    <h1>
                        <b>
                            Liste des reclamations du semestre 2
                        </b>
                    </h1>
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Evaluation</th>
                                <th>Semestre</th>
                                <th>Arguments</th>
                                <th>Matiere</th>
                                <th>Création</th>
                                <th>Infos Etudiants</th>
                            </tr>
                        </thead>
                        @foreach ($reclamations2 as $reclamation2)
                        <tr>
                            <td>{{$reclamation2->evaluation}}</td>
                            <td>{{$reclamation2->semestre}}</td>
                            <td>{{$reclamation2->commentaire}}</td>
                            <td>{{$reclamation2->matiere}}</td>
                            <td>{{$reclamation2->created_at}}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </section>
            <hr class="m-5" />
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