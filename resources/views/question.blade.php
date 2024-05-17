<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/question.css">
    
    <style>
      
    </style>
    </head>
    <body >
        
    @extends('layout/default')
        @section('main')
        <main >
            <!-- <section>
                <div>
                    <div>
                        have you already acount ?

                        <button class="btn btn-primary">login</button>
                    </div>
                    <div>
                        don't have you an acount?
                        <button class="btn btn-primary">signUp</button>
                    </div>
                </div>
            </section> -->

            <section>
                <div>
                    <p class="par">have you already acount ?</p>
                    <button class="btn btn-primary button"><a href="{{url('/login')}}">login</a></button>
                </div>
                <div>
                    <p class="par">you don't have  an acount?</p>
                    <button  class="btn btn-primary button"><a href="...">signUp</a></button>
                </div>
            </section>
        </main>
        @endsection

    </body>
</html>
