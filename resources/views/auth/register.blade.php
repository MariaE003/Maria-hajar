<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        
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
                <h1>Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <label for="name" class="mt-3">Nom : </label>
                    <input type="text" id="name" name="name" class="mt-3" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    <!-- Email Address -->
                    <label for="email" class="mt-3">Email : </label>
                    <input type="email" id="email" name="email" class="mt-3" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    <!-- Role -->
                    <label for="role" class="mt-3">Role : </label>
                    <select id="role" name="role" class="mt-3 role" required>
                        <option value="">Choisissez un rôle</option>
                        <option value="stagiaire">Stagiaire</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <!-- Password -->
                    <label for="password" class="mt-3">Mot de passe : </label>
                    <input type="password" id="password" name="password" class="mt-3" required autocomplete="new-password">
                    @error('password')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    <!-- Confirm Password -->
                    <label for="password_confirmation" class="mt-3">Confirmer le mot de passe : </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-3" required autocomplete="new-password">
                    @error('password_confirmation')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="ml-4 btnSubmit">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection
</body>
</html>





