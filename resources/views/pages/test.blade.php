<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diaporama Bootstrap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    Ajoutez vos styles personnalisés ici
    .carousel-item video {
      width: 100px;
      height: 220px;
    }
  </style>
</head>
<body>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img_page/stg1.jpg" alt="Première image">
    </div>
    <div class="carousel-item">
      <video class="d-block w-100" controls>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    Ajoutez d'autres éléments carousel-item selon vos besoins
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->





<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme des stagiaires</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 20px 0;
  }
  nav ul {
      list-style-type: none;
      padding: 0;
      text-align: center;
      background-color: #f0f0f0;
      margin: 0;
  }
  nav ul li {
      display: inline;
  }
  nav ul li a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
  }
  nav ul li a:hover {
      background-color: #ddd;
  }
  main {
      padding: 20px;
  }
  section {
      margin-bottom: 30px;
  }
  footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
  }
  </style>
</head>
<body>

<header>
  <h1>Plateforme des stagiaires</h1>
</header>

<nav>
  <ul>
    <li><a href="#dashboard">Tableau de bord</a></li>
    <li><a href="#announcements">Annonces</a></li>
    <li><a href="#events">Événements</a></li>
    <li><a href="#resources">Ressources de formation</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<main>
  <section id="dashboard">
    <h2>Tableau de bord</h2>
    <p>Bienvenue sur votre tableau de bord. Vous pouvez voir ici vos tâches assignées, vos objectifs de stage et les dernières mises à jour.</p>
  </section>

  <section id="announcements">
    <h2>Annonces</h2>
    <p>Voici les annonces les plus récentes pour les stagiaires :</p>
    <ul>
      <li>Nouvelle politique de télétravail en vigueur à partir du 1er mai.</li>
      <li>Atelier de développement personnel prévu pour le 15 avril à 14h.</li>
    </ul>
  </section>

  <section id="events">
    <h2>Événements à venir</h2>
    <p>Consultez notre calendrier des événements pour ne rien manquer :</p>
    <iframe src="https://calendar.google.com/calendar/embed?src=example%40gmail.com" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
  </section>

  <section id="resources">
    <h2>Ressources de formation</h2>
    <p>Accédez à nos ressources de formation pour enrichir votre expérience de stage :</p>
    <ul>
      <li><a href="#">Guide du stagiaire</a></li>
      <li><a href="#">Vidéos de formation</a></li>
      <li><a href="#">Cours en ligne recommandés</a></li>
    </ul>
  </section>

  <section id="contact">
    <h2>Contact</h2>
    <p>Pour toute question ou préoccupation, veuillez nous contacter :</p>
    <p>Nom de l'entreprise</p>
    <p>Adresse : 123 Rue Principale, Ville, Pays</p>
    <p>Téléphone : +123456789</p>
    <p>Email : info@example.com</p>
  </section>
</main>

<footer>
  <p>&copy; 2024 Plateforme des stagiaires. Tous droits réservés.</p>
</footer>

</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme des stagiaires</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    header {
      background-color: #007bff;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
    .announcement-carousel .carousel-item {
      text-align: center;
    }
    #contactModal .modal-dialog {
      max-width: 400px;
    }


    /* test  mabihach*/
    /* .card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  width: 300px;
  height: 200px;
  background-color: #f0f0f0;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  position: relative;
  animation: moveCard 2s infinite alternate;
}

.card-content {
  padding: 20px;
}

h3 {
  margin-top: 0;
  margin-bottom: 10px;
}

@keyframes moveCard {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-10px);
  }
} */

/* test 2 */
.card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  width: 300px;
  height: 200px;
  background-color: #f0f0f0;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  position: relative;
  margin: 0 10px;
}

.card-content {
  padding: 20px;
}

h3 {
  margin-top: 0;
  margin-bottom: 10px;
}

@keyframes moveCard {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.card {
  animation: moveCard 2s ease-in-out infinite;
}

.card:nth-child(2) {
  animation-delay: 0.2s;
}

.card:nth-child(3) {
  animation-delay: 0.4s;
}



/* last */
.card {
    width: 300px;
    height: 200px;
    background-color: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05); /* Effet de zoom au survol */
}

.card-content {
    padding: 20px;
}

.card-content h3 {
    margin-top: 0;
}

.card-content p {
    margin-bottom: 0;
}


/* hihi */
.card {
    width: 300px;
    height: 200px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.card-text {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    color: #fff;
    opacity: 0; /* Initialiser l'opacité à 0 */
    transition: opacity 0.3s ease, transform 0.3s ease;
    transform: translateY(100%); /* Déplacer le texte vers le bas */
}

.card:hover img {
    transform: scale(1.1); /* Effet de zoom sur l'image au survol */
}

.card:hover .card-text {
    opacity: 1; /* Faire apparaître le texte au survol */
    transform: translateY(0); /* Déplacer le texte vers le haut */
}






  </style>
</head>
<body>

<header>
  <h1>Plateforme des stagiaires</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#dashboard">Tableau de bord</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#announcements">Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#events">Événements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#resources">Ressources de formation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">
  <section id="dashboard" class="mb-5">
    <h2 class="mb-3">Tableau de bord</h2>
    <p>Bienvenue sur votre tableau de bord. Vous pouvez voir ici vos tâches assignées, vos objectifs de stage et les dernières mises à jour.</p>
  </section>

  <section id="announcements" class="mb-5">
    <h2 class="mb-3">Annonces</h2>
    <div id="announcementCarousel" class="carousel slide announcement-carousel" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p>Atelier de développement personnel prévu pour le 15 avril à 14h.</p>
        </div>
        <div class="carousel-item">
          <p>Nouvelle politique de télétravail en vigueur à partir du 1er mai.</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#announcementCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#announcementCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section id="events" class="mb-5">
    <h2 class="mb-3">Événements à venir</h2>
    <p>Consultez notre calendrier des événements pour ne rien manquer :</p>
    <iframe src="https://calendar.google.com/calendar/embed?src=example%40gmail.com" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
  </section>

  <section id="resources" class="mb-5">
    <h2 class="mb-3">Ressources de formation</h2>
    <ul>
      <li><a href="#">Guide du stagiaire</a></li>
      <li><a href="#">Vidéos de formation</a></li>
      <li><a href="#">Cours en ligne recommandés</a></li>
    </ul>
  </section>
</main>

<footer>
  <p>&copy; 2024 Plateforme des stagiaires. Tous droits réservés.</p>
</footer>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contactez-nous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="4" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div> 




<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->





<!-- mon test  mabihach-->

<!-- <div class="card-container">
    <div class="card">
        <div class="card-content">
            <h3>User123</h3>
            <p>user123@example.com</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod consectetur malesuada.</p>
        </div>
    </div>
</div> -->


<!-- test2 -->
<div class="card-container">
    <div class="card">
        <div class="card-content">
            <h3>User123</h3>
            <p>user123@example.com</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod consectetur malesuada.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h3>User456</h3>
            <p>user456@example.com</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod consectetur malesuada.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h3>User789</h3>
            <p>user789@example.com</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod consectetur malesuada.</p>
        </div>
    </div>
</div>



<div class="card">
    <div class="card-content">
        <h3>Titre de la carte</h3>
        <p>Description de la carte</p>
    </div>
</div>



<!-- hihi -->
<div class="card">
    <img src="image.jpg" alt="Image de la carte">
    <div class="card-text">
        <h3>Titre de la carte</h3>
        <p>Description de la carte</p>
    </div>
</div>






<script>

</script>
</body>
</html>
