<!DOCTYPE html>
<html>
    <head>
        <title>detail</title>
        <link rel="stylesheet" href="{{ asset('css/detailStg.css')}}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    </head>   
    <body>
    @extends('layout/default')
        @section('main')
        <main>
            <h1>detail du stagiaire {{$data[0]->name}}</h1>
            <section>
                
                               
                <td> <h5 class="div ">Nom :</h5><h5 class="dblock"> {{$data[0]->name}}</h5><br></td>
                <td> <h5>phone :</h5><h5>{{$data[0]->phone}}</h5></td><br>
                <td> <h5>dateNias :</h5><h5>{{$data[0]->dateNias}}</h5></td><br>
                <td> <h5>adress :</h5><h5>{{$data[0]->adress}}</h5></td><br>
                <td> <h5>status :</h5><h5>{{$data[0]->status}}</h5></td><br>
                <a href="/update/{{$data[0]->iddemande}}" class="btn btn-primary mt-3 d-block">modifier</a>
                @if ($data[0]->status  === 'en attente')
                    <form action="/accepter" method="post"> <a href="/accepter/{{$data[0]->iddemande}}" class="btn btn-success mt-3  d-block">Accepter la demande</a></form>
                    <form method="post" action="/refuser"> <a href="/refuser/{{$data[0]->iddemande}}" class="btn btn-danger mt-3 d-block">Refuser la demande</a></form>
                @elseif ($data[0]->status === 'accepter')
                    <!-- <form action="/accepter" method="post"> <a href="/accepter/{{$data[0]->iddemande}}" class="btn btn-success mt-3  d-block">Accepter la demande</a></form> -->
                    <form method="post" action="/refuser"> <a href="/refuser/{{$data[0]->iddemande}}" class="btn btn-danger mt-3 d-block">Refuser la demande</a></form>
                @elseif ($data[0]->status === 'refuser')
                <form action="/accepter" method="post"> <a href="/accepter/{{$data[0]->iddemande}}" class="btn btn-success mt-3  d-block">Accepter la demande</a></form>
                    <!-- <form method="post" action="/refuser"> <a href="/refuser/{{$data[0]->iddemande}}" class="btn btn-danger mt-3 d-block">Refuser la demande</a></form> -->
                @endif
                <a href="/delete/{{$data[0]->iddemande}}" class="btn btn-secondary mt-3 d-block">supprimer</a>

                
                    
            </section>

        </main>
    @endsection
    </body>
</html>
