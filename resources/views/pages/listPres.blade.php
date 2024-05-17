<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Présences</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/avancement.css')}}">
</head>
<body>
    @extends('layout.default')
    @section('main')
        <div class="container">
            <form action="/presence" method="GET" class="mb-3" class="search pt-3 d-block">
                <div class="form-group ">
                    <label for="selected_month">Sélectionner un mois :</label>
                    <select name="selected_month" id="selected_month" class="form-control">
                        <option value="">Sélectionner...</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Août</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                        
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure d'arrivée</th>
                        <th>Heure de départ</th>
                        <th>Nom du Stagiaire</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stagiaires as $data)
                    <tr>
                        <td>{{ $data->dateAct }}</td>
                        <td>{{ $data->heureArr }}</td>
                        <td>{{ $data->heureDep }}</td>
                        <td>{{ $data->stagiaire->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $stagiaires->links() }}
        </div>
    @endsection
</body>
</html>

