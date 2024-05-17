


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>avancement</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/avancement.css')}}">
</head>
<body>
@extends('layout/default')
@section('main')
    <form action="{{url('searchprojetAbs')}}" method="get" class="search pt-3">
        <input class="form-control" id="width" type="text" name="name" placeholder="Entrer le nom du stagiaire"/>
        <input type="submit" class="btn btn-success" value="Rechercher"/>
    </form>

    <!-- <form action="{{url('searchprojetAbs')}}" method="get" class="search pt-3">
        <input class="form-control" id="width" type="text" name="search" placeholder="entrer votre texte"/>
        <input type="submit" class="btn btn-success" value="search"/>
    </form> -->
    <table class="table">
        <thead>
            <tr>
                <th>dateDebut</th>
                <th>dateFin</th>
                <th>motif</th>
                <th>Nom du Stagiaire</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stagiaires as $data)
            <tr>
                <td>{{ $data->dateDebut}}</td>
                <td>{{ $data->dateFin }}</td>
                <td>{{ $data->motif }}</td>
                <td>{{ $data->stagiaire->name}}</td>
                @if ($data->status === 'accepter')
                    <td>La demande est acceptée</td>
                @elseif ($data->status === 'refuser')
                    <td>La demande est refusée</td>
                @else
                    <td>
                        <form action="/accepterDemande/{{$data->id}}" method="get" class="form">
                            <button type="submit" class="btn btn-info">Accepter</button>  
                        </form>
                        <form action="/refuserDemande/{{$data->id}}" method="get" class="form">
                            <button type="submit" class="btn btn-light">Refuser</button>
                        </form>
                    </td>
                @endif
            </tr>
            @endforeach
            {{$stagiaires->links()}}
        </tbody>
    </table>
@endsection        
</body>
</html>
