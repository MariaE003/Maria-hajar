<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueille</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/StyleAcc.css')}}">
                
        <style>
            /* .main {
  width: 100%;
  padding-top: 15em;
  margin: -6em -1;
  padding-right: 82em;
  padding-left:50em ;
  margin-left: -5.5em;
  margin-top: -5.5em;
  min-height: 100vh;
  background-image: linear-gradient(rgba(29, 38, 125,0.7), rgba(29, 38, 125,0.7)), url("/img_page/couvrir-depense-sante-effet-U.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

.content {
  padding: 20px;
  text-align: center;
  color: white;
}

.animated-h1 {
  font-size: 36px;
  animation: fadeInUp 1s ease;
}

p {
  font-size: 18px;
  margin-bottom: 10px;
}

a {
  display: inline-block;
  padding: 10px 20px;
  margin: 10px;
  background-color: #fff;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
}

a:hover {
  background-color: #333;
  color: #fff;
}

.social-media {
  margin-top: 20px;
}

.social-link {
  display: block;
  margin-bottom: 10px;
  color: #fff;
  text-decoration: none;
}

.social-link:hover {
  text-decoration: underline;
} */



        </style>
    </head>
    <body >
        
    @extends('layout/default')
        @section('main')
        
        <main class="main_acc">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                        
                        class="nav-link dashboard btn btn-dark text-light"
                        
                        >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="login btn-dark text-light  nav-link" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" register btn-dark text-light nav-link" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
            <div class="main " style="padding-top: 0em;">
                <!-- <div class=""> -->
                    <h1 class="animated-h1">Bienvenue ...!</h1>
                <!-- </div> -->
            </div>
            <!--  -->
            <!-- <div class="main">
        <div class="content">
            <h1 class="animated-h1">Bienvenue à notre site web !</h1>
            <p>Découvrez nos dernières offres et promotions.</p>
            <p>Inscrivez-vous à notre newsletter pour recevoir des mises à jour exclusives.</p>
            <a href="#services">Découvrez nos services</a>
            <a href="#contact">Contactez-nous</a>
            <div class="social-media">
                <a href="#" class="social-link">Suivez-nous sur Facebook</a>
                <a href="#" class="social-link">Suivez-nous sur Instagram</a>
                <a href="#" class="social-link">Suivez-nous sur Twitter</a>
            </div>
        </div>
    </div> -->
            <!--  -->
            <section >               
                <h1 class="text-center"></h1>
                <!-- Q vs R -->
                <div id="accordion" style="width: 75em;" class="AfiicheInfoAcceull mt-5">
                <!-- Accordion Example avec un beau design -->
                <div class="accordion">
                    <div class="accordion-item ">
                    <input type="checkbox" id="accordion-item-1" class="accordion-item-toggle">
                    <label for="accordion-item-1" class="accordion-item-header">Notre Service</label>
                    <div class="accordion-item-content active">
                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <input type="checkbox" id="accordion-item-2" class="accordion-item-toggle">
                    <label for="accordion-item-2" class="accordion-item-header">À propos de nous</label>
                    <div class="accordion-item-content">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <input type="checkbox" id="accordion-item-3" class="accordion-item-toggle">
                    <label for="accordion-item-3" class="accordion-item-header">avez-vous de probleme</label>
                    <div class="accordion-item-content">
                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                    </div>
                </div>
                <!-- card link -->
                <div class="d-flex justify-between">
                    <div class="card subject animation divcard" style="width: 20rem; ">
                    <div>
                        <img class="card-img-top" src="img_page/stg1.jpg"  alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{url('/espace_stagiaire')}}" class="btn btn-primary">espace_stagiaire</a>
                        </div></div>
                    </div>

                    <div class="card subject animation divcard" style="width: 20rem;">
                    <div>
                        <img class="card-img-top" src="img_page/stg1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{url('/espace_Admin')}}" class="btn btn-primary">espace_Admin</a>
                        </div>
                        </div>
                    </div>

                    <div class="card subject animation divcard" style="width: 20rem;">
                    <div>
                        <img class="card-img-top" src="img_page/stg1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{url('/contact')}}" class="btn btn-primary">contact</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            <button class="buutonFeedback" data-toggle="modal" data-target="#feedbackModal">Donnez votre avis 😊 </button>
            
            <!-- Modal de feedback -->
        <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-feedback">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Nous voulons votre opinion !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                <span aria-hidden="true" ><i class="fas fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="feedbackForm" action="/feed" method="get">
                <div class="form-group">
                    <label for="satisfaction">Quelle est votre niveau de satisfaction avec notre service ?</label>
                    <div class="emoji-rating">
                    <input type="radio" id="very-dissatisfied" name="satisfaction" value="1">
                    <label for="very-dissatisfied">😠</label>
                    <input type="radio" id="dissatisfied" name="satisfaction" value="2">
                    <label for="dissatisfied">😐</label>
                    <input type="radio" id="neutral" name="satisfaction" value="3">
                    <label for="neutral">😑</label>
                    <input type="radio" id="satisfied" name="satisfaction" value="4">
                    <label for="satisfied">😊</label>
                    <input type="radio" id="very-satisfied" name="satisfaction" value="5">
                    <label for="very-satisfied">🤩</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="feedback-text">Qu'aimez-vous ou n'aimez-vous pas dans notre service ?</label>
                    <textarea class="form-control" id="feedback-text" rows="3" name="comment"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" ">Continuer</button>
            </div>
            </form>
            </div>
        </div>
        </div>
      </main>
      @endsection

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



</body>

</html>
