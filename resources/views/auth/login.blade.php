<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .widthradio{
            width: 13px;
        }
        .typing-text p {
            overflow: hidden; /* Masquer le texte qui dépasse */
            white-space: nowrap; /* Empêcher le texte de passer à la ligne */
            border-right: .15em solid orange; /* Ajouter un effet de texte en train d'être tapé */
            animation: typing 3s steps(30) infinite;
            /* margin-right: 10rem; */
            }

            @keyframes typing {
            from { width: 0; }
            to { width: 50%; }
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
            <h1>login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <label for="email" class="mt-3">email : </label>
                <input type="email" id="email" name="email" class="mt-3" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
                <!-- Password -->
                <label for="password" class="mt-3">mot de passe : </label>
                <input type="password" id="password" name="password" class="mt-3" required autocomplete="current-password">
                @error('password')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 widthradio" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                 <input type="submit" value="connect" class="mt-3">
                <!--<a href="{{ url('/signup') }}" class="nav-link mt-3">tu n'as pas de compte encore ?</a> -->
                <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 nav-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
            </form>
        </div>
    </section>
</main>
@endsection
</body>
</html>
