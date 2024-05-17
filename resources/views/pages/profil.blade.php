


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styleProfil.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="css/styleProfil.css">
</head>
<body>
@extends('layout/default')
    @section('main')
    <main class="main container">
        <div id="container">
        <section>
                <!-- <img class="imgUser" src="img_page/person-bounding-box.svg" alt="gggg"/> -->
                <img class="imgUser" src="img_page/person-circle.svg" alt="gggg"/>
                <a href="#" class="nav-link ">logout</a>
          
        </section>
        <section class="section2">
            <h1>About</h1>
            <table class="table ">
                <tr>
                    <td>Nom Comple</td>
                    <td>{}</td>
                    <td><a href="#" class="link-light ">Update</a></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{}</td>
                    <td><a href="#" class="link-light ">Update</a></td>
                </tr>
                <tr>
                    <td>telephone</td>
                    <td>{}</td>
                    <td><a href="#" class="link-light ">Update</a></td>
                </tr>
            </table>
        </section>
        </div>
    </main>
@endsection

</body>
</html>