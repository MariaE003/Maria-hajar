<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/doneContact.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
@extends('layout/default')
      @section('main')
    <main >
        <div class="alert alert-warning">
            <h3 class="alert-heading">Merci! &#128525</h4>
            <p>"Merci d'avoir envoyé votre formulaire de contact. Nous vous répondrons dans les plus brefs délais. N'hésitez pas à nous contacter si vous avez d'autres questions. Merci!"</p>
        </div>
        <div>
            <a href="{{url('/espace_stagiaire')}}" class="btn btn-primary lien">revien</a>
        </div>


    <!-- <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </div> -->

    </main>


  @endsection

   
</body>
</html>