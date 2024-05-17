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
        <main >
            <section class="section1">
                <div class="typing-text">
                    <img src="img_page/stg1.jpg" alt="alt">
                    <!-- <p class="animated-p">"Pour accéder à votre compte, veuillez saisir votre nom d'utilisateur et votre mot de passe. Nous sommes ravis de vous revoir! Connectez-vous pour profiter de nos services personnalisés."</p> -->
                </div>
            </section>
            <section class="section2">
                <div  class="divForm">
                    <h1>login</h1>
                    <form action="">
                        <label for=""  class="mt-3">emali : </label>
                        <input type="email" name="email"  class="mt-3">
                        <!-- ------------ -->
                        <label for=""  class="mt-3">mot de passe : </label>
                        <input type="password" name="psw"  class="mt-3"><br>
                        <!-- --------- -->
                        <input type="submit" value="connect" class="mt-3"><br>
                        <a href="{{url('/signup')}}" class="nav-link">tu n'a pas de compte encore ?</a>

                    </form>
                </div>
            </section>
        </main>
@endsection



</body>
</html>