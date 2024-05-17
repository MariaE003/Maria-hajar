
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .divForm h1{
            font-size:25px;
            font-weight: bold;
        }
        .divForm p{
            font-size:20px;
        }
        main{
            min-height: 80.9vh;
            display: flex;
        }
        .imgLogin{
            width: 30em;
            margin: 0px 5em;
        }
        .labelEmail{
            display: block;
            text-transform: capitalize;
            font-size: 20px;
        }
        .email{
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 20em;
        }
        .btnsubmit{
            background-color: #2634d5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnsubmit:hover{
            background-color: #1189ea;
        }
    </style>
</head>
<body>
@extends('layout/default')

@section('main')

    <main>
        <section class="section1">
            <div class="typing-text">
                <img src="img_page/undraw_login_re_4vu2.svg" class="imgLogin" alt="alt">
                <!-- <p class="animated-p">"Pour accéder à votre compte, veuillez saisir votre nom d'utilisateur et votre mot de passe. Nous sommes ravis de vous revoir! Connectez-vous pour profiter de nos services personnalisés."</p> -->
            </div>
        </section>
        <section class="section2">
            <div class="divForm">
                <h1>Mot de passe oublié ?</h1>
                <p>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Adresse e-mail -->
                    <label for="email" class="mt-3 labelEmail" >Adresse e-mail : </label>
                    <input type="email" id="email" name="email" class="mt-3 email" value="{{ old('email') }}" required autofocus autocomplete="email">
                    @error('email')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    <div class="flex items-center justify-end mt-4 ">
                        <button type="submit" class="ml-4 btnsubmit">
                            {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection
</body>
</html>


