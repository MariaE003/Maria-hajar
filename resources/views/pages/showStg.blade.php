<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('css/showStg.css')}}">

    </head>
    <body >
    @extends('layout/default')
        @section('main')
        <h1 class="pt-5 animated-h1">Liste des Stagiaires</h1>
        <main>
            <form action="{{url('search')}}" method="get" class="search pt-3 ">
                <input class="form-control " id="width" type="text" name="name" placeholder="entrer votre texte"/>
                <!-- <input type="submit" class="btn btn-secondary" value="search"/> -->
                <input type="submit" class="btn btn-success" value="search"/>
                <!-- le button du revien -->
            </form>
                          
            
            @if(count($stagiaires)>0)
            <section class="section">
                <div class="div row"> 
                @foreach ($stagiaires as $user)
                    <div class="col-4 px-5 py-5 ">

                            <div class="card text-white bg-dark hovercard" style="width: 15rem;height:22rem;">
                            <img src="img_page/stg1.jpg" class="card-img-top img" alt="Photo du stagiaire">

                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                                <p class="card-text">{{$user->phone}}<br>{{$user->adress}}</p>
                                <a href="/detail/{{$user->iddemande}}" class="btn btn-primary">Plus d'infos</a>                                
                            </div>
                            </div>
                    </div>   
                     
                     

                    @endforeach 

                    
                    </div> 
                    <form method="get" action="/revien">
                    <button type="submit" name="revien" class="btn btn-primary mt-2 mb-5  revien">revien</button></form>
            </section>
            {{$stagiaires->links()}}
            

            
            @else
                <h1>rien</h1>
            @endif

            
                    <!-- <div class="col-4 px-5 py-5">                 
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>  
                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div> 
                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 px-5 py-5">
                        <div class="card text-white bg-dark" style="width: 15rem;height:22rem;">
                        <img src="img_page/stg1.jpg" class="card-img-top" alt="Photo du stagiaire">
                        <div class="card-body">
                            <h5 class="card-title">Prénom Nom</h5>
                            <p class="card-text">Formation: Nom de la formation<br>Année: Année du stage</p>
                            <a href="#" class="btn btn-info">Détails</a>
                        </div>
                        </div>
                    </div>-->
                
            </section>

        </main>

        @endsection
    </body>
</html>
