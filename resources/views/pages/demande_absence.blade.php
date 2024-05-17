<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/absence.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>saisie de Absence</title>
    
</head>
<body>
@extends('layout/default')
      @section('main')
    <main >
    <h2 class="text-center">demande absence</h2>
        <section class="section">
            
            <div class="container">
                       
            <form id="contact-form" action="/stgabsence" method="get">
                @csrf
                <div>
                    <label for="dateDebut" class="dateDebutL">Date debut:</label>
                    <input type="date" name="dateDebut" class="dateDebut" id="dateDebut" required/>
                </div>
                @error('dateAct')
                    <span class="text-danger">la date est obligatoire</span>
                @enderror
                <div>
                    <label for="dateFin" class="dateFinL">Date fin :</label>
                    <input type="date" name="dateFin" class="dateFin" id="dateFin" required/>
                </div>
                <div>
                    <label for="motif" class="motifL">motif :</label>
                    <textarea name="motif" class="motif" id="motif" rows="5" required> </textarea>
                </div>
    
                <button class="mt-4 mr-2 " id="button" type="submit">Envoyer</button>
            </form>
            </div>
    </section>
    </main>
  @endsection
</body>
</html>