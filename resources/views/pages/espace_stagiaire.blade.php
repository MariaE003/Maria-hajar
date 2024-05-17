<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/styleespace.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

       
    </head>
    <body >
        
        @extends('layout/default')
        @section('main')
      
        <main >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner caro  pt-2">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img_page/community-concept-with-hands-people.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img_page/gros-plan-personne-souriante-dans-salle-conference.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img_page/deux-filles-t-shirts-blancs-travaillant-au-bureau_1157-27547.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img_page/group-people-working-out-business-plan-office.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img_page/instructeur-expliquant-logiciel-entreprise-specifique-au-stagiaire.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <div class="carousel-caption d-none d-md-block">
                        <h5>hi</h5>
                        <p class="animated-text">
                        "Découvrez de nouvelles opportunités avec nos offres de stage passionnantes !"
                        </p>
            </div>
            </div>    

      @if($demande && ($demande->status === 'en attente' || $demande->status === 'refuser'))

      <div class="card-container">
              <div class="card">
                  <div class="card-content card-contentf">
                    <ul class="card-links">
                      <li><a href="{{url('demandeStg')}}" class="card-link">demande de stage</a></li>
                      <li><a href="{{url('stgPresence')}}" class="card-link disabled">saisir la présence</a></li>
                      <li><a href="{{url('suiviDemande')}}" class="card-link">suivi de la demande</a></li>
                    </ul>
                  </div>
                  </div>
              <div class="card">
                  <div class="card-content card-contentl">
                    <ul class="card-links">
                        <li><a href="{{url('stgAbsence')}}"  class="card-link disabled">demande d'absence</a></li>
                        <li><a href="{{url('suiviprojet')}}"  class="card-link disabled">suivi du projet</a></li>
                    </ul>
                  </div>
              </div>
          </div>
    @elseif ($demande && $demande->status === 'accepter')
              
        <div class="card-container">
            <div class="card">
                <div class="card-content card-contentf">
                  <ul class="card-links">
                    <li><a href="{{url('demandeStg')}}" class="card-link">demande de stage</a></li>
                    <li><a href="{{url('stgPresence')}}" class="card-link">saisir la présence</a></li>
                    <li><a href="{{url('suiviDemande')}}" class="card-link">suivi de la demande</a></li>
                  </ul>
                </div>
                </div>
            <div class="card">
                <div class="card-content card-contentl">
                  <ul class="card-links">
                      <li><a href="{{url('stgAbsence')}}"  class="card-link">demande d'absence</a></li>
                      <li><a href="{{url('suiviprojet')}}"  class="card-link disabled">suivi du projet</a></li>
                  </ul>
                </div>
            </div>
        </div>
      @else    
      <div class="card-container">
              <div class="card">
                  <div class="card-content card-contentf">
                    <ul class="card-links">
                      <li><a href="{{url('demandeStg')}}" class="card-link">demande de stage</a></li>
                      <li><a href="{{url('stgPresence')}}" class="card-link disabled">saisir la présence</a></li>
                      <!-- <li><a href="{{url('suiviDemande')}}" class="card-link">suivi de la demande</a></li> -->
                    </ul>
                  </div>
                  </div>
              <div class="card">
                  <div class="card-content card-contentl">
                    <ul class="card-links">
                        <li><a href="{{url('stgAbsence')}}"  class="card-link disabled">demande d'absence</a></li>
                        <li><a href="{{url('suiviprojet')}}"  class="card-link disabled">suivi du projet</a></li>
                    </ul>
                  </div>
              </div>
          </div>
     @endif
   
     
  </main>

@endsection

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
