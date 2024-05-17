<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/demandeStg.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>demande de stage</title>
    
</head>
<body>
@extends('layout/default')
      @section('main')
    <main >
    <h2 class="text-center">demande de stage</h2>
        <section class="section">
            
            <div class="container">
                       
            <form id="contact-form" action="/AddDemande" method="post">
                @csrf
                <table>
                    <tr><td><label for="name">Nom :</label></td>
                    <td><label for="phone"> Numéro de téléphone :</label></td></tr>
                    <tr><td><input type="text" id="name" name="name" required></td>
                    <td> <input type="number" id="phone" name="phone" required></td></tr>
                </table>
                <div>
                    <label for="adress" class="adressL">Adress:</label>
                    <input type="text" name="adress" class="adress" id="adress"/>
                </div>
                <div>
                    <label for="dateNias" class="dateNiasL">Date de naissance:</label>
                    <input type="date" name="dateNias" class="dateNias" id="dateNias"/>
                </div>
                <div>
                    <label for="etablissementL" class="dateNiasL">Établissement d'enseignement actuel:</label>
                    <select class="etablissement" name="etablissement" id="etablissement">
                        <option value="">choisi votre etablissement</option>
                        <option value="ntic">ntic</option>
                        <option value="est">est</option>
                        <option value="ensa">ensa</option>
                        <option value="lafac">lafac</option>
                    </select>
                </div>
                <div>
                    <label for="dateDL" class="dateDL">Date de début :</label>
                    <input type="date" name="dateD" class="dateD" id="dateD"/>
                </div>
                <div>
                    <label for="dateFL" class="dateFL">Date de fin :</label>
                    <input type="date" name="dateF" class="dateF" id="dateF"/>
                </div>
    
                <button class="mt-4 mr-2 " id="button" type="submit">Envoyer</button>
            </form>
            

            </div>
    </section>
    </main>


  @endsection

   
</body>
</html>