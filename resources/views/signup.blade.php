<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="{{ asset('css/signup.css')}}">
    
    <style>
      
    </style>
    </head>
    <body >
        
    @extends('layout/default')
        @section('main')
        
        <main >
        <section class="section1">
            <div>
                    <img src="img_page/stg1.jpg" alt="alt">
                </div>
            </section>
            <section class="section2">
            <div>
                <h1>signUp</h1>
                <form action="/formAjou" method="post">
                @csrf
                    <label for="">nom</label>
                    <input type="text" name="nom">

                    <label for="">prenom</label>
                    <input type="text" name="prenom">

                    <label for="">date de naisssnace</label>
                    <input type="date" name="datNaiss">

                    <label for="">email</label>
                    <input type="email" name="email">

                    <label for="">mot de passe</label>
                    <input type="text" name="psw">

                    <!-- <label for="">role</label>
                    <select name="role" >
                        <option value="___">choisi votre role</option>
                        <option value="Stagiaire">Stagiaire</option>
                        <option value="Admin">Admin</option>
                    </select> -->

                    <input type="submit" value="signUp" class="mt-3">                  
                    <a href="{{url('/login')}}" class="nav-link">tu as deja un compte ?</a>

                </form>
            </div>
            </section>


        </main>
        @endsection

    </body>
</html>
