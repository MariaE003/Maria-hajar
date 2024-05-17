<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/presence.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>saisie de presence</title>
    
</head>
<body>
@extends('layout/default')
      @section('main')
    <main >
    <h2 class="text-center">saisie le presence</h2>
        <section class="section">
            
            <div class="container">
                       
            <form id="contact-form" action="/stgPresence1" method="get">
                @csrf
     
                <div>
                    <label for="dateAct" class="dateActL">Date actuel:</label>
                    <input type="date" name="dateAct" class="dateAct" id="dateAct" required/>
                </div>
                @error('dateAct')
                    <span class="text-danger">la date est obligatoire</span>
                @enderror
                <div>
                    <label for="heureArr" class="heureArrL">Heure d'arrive :</label>
                    <input type="time" name="heureArr" class="heureArr" id="heureArr" required/>
                </div>
                <div>
                    <label for="heureDep" class="heureDepL">Heure depart :</label>
                    <input type="time" name="heureDep" class="heureDep" id="heureDep" required/>
                </div>
    
                <button class="mt-4 mr-2 " id="button" type="submit">Envoyer</button>
            </form>
            </div>
    </section>
    </main>


  @endsection

   
</body>
</html>