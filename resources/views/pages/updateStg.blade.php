<!DOCTYPE html>
<html>
    <head>
        <title>detail</title>
        <link rel="stylesheet" href="{{ asset('css/detailStg.css')}}">
    </head>   
    <body>
    @extends('layout/default')
        @section('main')
        <main>
            <h1>modifier le stagiaire {{$data[0]->name}}</h1>
            <section>
                <form method="get" action="/savemod">
                    @csrf
                    <input type="text" readonly value="{{$data[0]->iddemande}}" class="form-control" name="id" style="display: none;"/>
                    <input type="text" value="{{$data[0]->name}}" name="name" class="mt-2 mb-2 form-control "/>
                    <input type="text" value="{{$data[0]->phone}}" name="phone" class="form-control "/><br>
                    <input type="text" value="{{$data[0]->dateNias}}" name="dateNias" class="form-control "/><br>
                    <input type="text" value="{{$data[0]->adress}}" name="adress" class="form-control "/><br>
                    <input type="text" value="{{$data[0]->status}}" name="status" class="form-control "/><br>
                    <input type="submit" value="valider" class="mt-2 mb-3 form-control btn btn-primary " />
                    <!-- <a href="{{url('/detail')}}">Annuler</a> -->
                </form>
                
                    
            </section>

        </main>
    @endsection
    </body>
</html>
