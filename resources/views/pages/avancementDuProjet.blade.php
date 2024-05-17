<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>avancement</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/avancement.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body >
    @extends('layout/default')
        @section('main')
        
        <form action="{{url('searchprojet')}}" method="get" class="search pt-3 ">
                <input class="form-control " id="width" type="text" name="search" placeholder="entrer votre texte"/>
                <!-- <input type="submit" class="btn btn-secondary" value="search"/> -->
                <input type="submit" class="btn btn-success" value="search"/>
                <!-- le button du revien -->
        </form>
    <table class="table">
        <thead>
            <tr>
                <th>titreProjet</th>
                <th>dateDebut</th>
                <th>dateFin</th>
                <th>description</th>
                <th>status</th>
                <th>Nom du Stagiaire</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($data as $data)
            <tr>
            
                <td>{{ $data->titreProjet}}</td>
                <td>{{ $data->dateDebut }}</td>
                <td>{{ $data->dateFin }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->stagiaire->name}}</td>
            </tr>
            @endforeach
            {{$data->links}}
            
        </tbody>
    </table>
    {{$data->paginate(6)}}
        @endsection        
  
    </body>
</html>
