<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleContact.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <title>aide</title>
    
</head>
<body>
@extends('layout/default')
      @section('main')
    <main class="mainA">
        <h1>contacter nous</h1>   
        <div class="container" id="containerContact">
          <form id="contact-form" method="get" action="/doneContact1">
            @csrf
          <table>
              <tr ><td><label for="name">Nom :</label></td>
              <td><label for="email">Email :</label></td></tr>
              <tr><td><input type="text" id="name" name="name" required></td>
              <td> <input type="text" id="email" name="email" required></td></tr>
          </table>
          <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
        <button type="submit">Envoyer</button>
      </form>
    </div>
    </main>


    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  @endsection
<!-- <script>
    // responsive
    var menuUL = document.getElementsByTagName("ul");
    var heightOful = menuUL[0].scrollHeight;
    var btnToggle = document.getElementsByClassName("btn-toggle");
    btnToggle[0].addEventListener("click",function(){
        if(menuUL[0].style.maxHeight){
            menuUL[0].style.maxHeight = null;
        }
        else{
            menuUL[0].style.maxHeight = menuUL[0].scrollHeight + "px";
        }
    });
    // btn
    let mybutton = document.getElementById("myBtn");
    // 
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
    // 
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

      // JavaScript pour la gestion du formulaire de contact
      document.getElementById("contact-form").addEventListener("submit", function(event){
        event.preventDefault();
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;
        
        // Ici, vous pouvez ajouter du code pour traiter les données du formulaire, 
        // comme l'envoi d'un e-mail ou l'enregistrement dans une base de données.
        
        alert("Merci, votre message a été envoyé !")}); 
</script>-->
</body>
</html>