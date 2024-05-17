<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/contactMsg.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

</head>
<body> 
@extends('layout/default')
    @section('main')
    <div class="card-container   row">
        @foreach($data as $data)
        <div class="card  col-3">
            <div class="card-content  ">
                
                <h3 >{{$data->name}}</h3>
                <p>{{ $data->email}}</p>
                <p>{{$data->message}}</p>
                
            </div>
        </div>
        @endforeach
       {{$data->paginate(6)}}
    </div>
     
    
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
