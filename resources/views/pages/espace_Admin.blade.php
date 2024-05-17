<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styleespace.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
  
    </head>
    <body >
    @extends('layout/default')
        @section('main')
        <main >
          
        <div id="carouselExampleIndicators" class="carousel slide  " data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner caro pt-2">
    <div class="carousel-item active">
      <img class="d-block " src="img_page/black-office-worker-checkered-shirt-embracing-blonde-secretary-woman-while-she-making-selfie-young-managers-international-company-having-fun-meeting.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_page/community-concept-with-hands-people.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_page/collegues-college-etudiant-ensemble.jpg" alt="Third slide">
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
    @if (Auth::user()->role === 'Admin')
    <section class="cardLinkAdd cardLink">
        <div >
          <a href="{{url('showStg')}}" class="d-block nav-link">voir les demande de stage</a>
          <!-- parrain et info stg et prj service -->
          <a href="{{url('chart')}}"  class="d-block nav-link">statistique de demande</a>
          <a href="{{url('suiviDemandeAbs')}}"  class="d-block nav-link">suivie demande d'absence</a>
        </div>
        <div >
          <a href="{{url('listPres')}}" class="d-block nav-link">la liste des presence</a>
          <a href="{{url('avancement')}}" class="d-block nav-link">avancement du projet</a>
          <a href="{{url('contactMsg')}}"  class="d-block nav-link">contact</a>
        </div>
      </section>
    @else
    <section class="cardLink ">
        <div >
          <a href="{{url('pages_showStg')}}" class="d-block nav-link disabled">voir les demande de stage</a>
          <!-- parrain et info stg et prj service -->
          <a href="{{url('chart')}}"  class="d-block nav-link disabled">statistique de demande</a>
          <a href="{{url('suiviDemandeAbs')}}"  class="d-block nav-link disabled">suivie demande d'absence</a>
        </div>
        <div >
        <a href="{{url('listPres')}}" class="d-block nav-link disabled">la liste des presence</a>
          <a href="{{url('avancement')}}" class="d-block nav-link disabled">avancement du projet</a>
          <a href="{{url('contactMsg')}}"  class="d-block nav-link disabled">contact</a>
        </div>
      </section>
    @endif
    
  </main>
  <form action="/chart1" method="get">
    <button type="submit" class=" btnfeedback">feedback</button>
  </form>
  @endsection
  
    </body>
</html>
