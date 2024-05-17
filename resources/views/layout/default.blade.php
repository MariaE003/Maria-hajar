<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="/src/output.css"> -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    
    </head>
    <body >
        
            <nav class="container mx-auto  d-flex justify-content-between  m-3 text-dark ">
                <div class="">
                    <!-- <img src="{{asset('img/ocp6.png') }}" class="mix-blend-color-burn w-52 " alt="not_Found"> -->
                    <a  href="{{url('/')}}"><img src="img/tel.png" class=""  alt="not_Found" width="109"></a>
                    
                </div>
                <!-- resposive -->
                    <!-- <button class="btn-toggle">
                <span></span>
                <span></span>
                <span></span>
                </button> -->

                <div class=" h-25  p-2 shadow rounded-pill mt-4 ">
                    <ul class="nav">
                        <li class="nav-item hover">
                            <a href="{{url('/')}}" class="mx-4 nav-link text-dark  ">Accuille</a>
                        </li>
                        <!-- //candidature -->
                        <!-- //feedback -->
                        @if (Auth::check())
    @if (Auth::user()->role === 'Admin')
        <li class="nav-item hover">
            <a href="{{url('/espace_Admin')}}" class="mx-4 nav-link text-dark">Espace Admin</a>
        </li>
        <li class="nav-item hover d-none">
            <a href="{{url('/espace_stagiaire')}}" class="mx-4 nav-link text-dark">Espace Stagiaire</a>
        </li>
    @else
        <li class="nav-item hover d-none">
            <a href="{{url('/espace_Admin')}}" class="mx-4 nav-link text-dark">Espace Admin</a>
        </li>
        <li class="nav-item hover ">
            <a href="{{url('/espace_stagiaire')}}" class="mx-4 nav-link text-dark">Espace Stagiaire</a>
        </li>
    @endif

@endif


                        <li class="nav-item hover">                   
                            <a href="{{url('/contact')}}" class="mx-4 nav-link text-dark">contact</a>
                        </li>
                    </ul>
                    
                    
                </div>
                <!-- <div style="margin-top: 30px;">
                    <select class=" form-select"> 
                    <option value="Langue">choisi une Langue</option>
                    <option value="Fr">Fr</option>
                    <option value="Eng">Eng</option>
                    </select>
                </div> -->
                
            </nav>

        <main class="container ">
            <!-- reseau sociaux -->
        <div class="icon-bar">
          <a href="https://www.facebook.com/ocpmsOfficiel/?locale=fr_FR" class="facebook"><i class="fab fa-facebook"></i></a> 
          <a href="https://twitter.com/ocp_ms" class="twitter"><i class="fab fa-twitter"></i></a> 
          <a href="https://www.instagram.com/ocp_ms/p/CcEbJJrKDV6/?next=%2Fp%2F9WeBq8TB13%2F&hl=ja" class="google"><i class="fab fa-instagram"></i></a> 
          <a href="https://ma.linkedin.com/company/ocpms" class="linkedin"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.youtube.com/watch?v=QqRoumDNgGA" class="youtube"><i class="fab fa-youtube"></i></a> 
      </div>
            @yield('main')
            
        </main>

        <footer class="container d-flex justify-content-around  shadow rounded-pill footer">
            <div class="text-white text-center">created by maria && hajar  </div>
            <div class="text-white text-center"> 	&copy; copyright 2024 </div>
            
                <div class="social-icons ">
                    <a href="https://ma.linkedin.com/company/ocpms"><i class="fab fa-linkedin"></i></a> 
                    <a href="https://twitter.com/ocp_ms"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/ocp_ms/p/CcEbJJrKDV6/?next=%2Fp%2F9WeBq8TB13%2F&hl=ja"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/watch?v=QqRoumDNgGA"><i class="fab fa-youtube"></i></a>
                    <a href="https://ocp-ms.com"><i class="fas fa-solid fa-link"></i></a>
                </div>          
        </footer> 
</nav>

    </body>
</html>
