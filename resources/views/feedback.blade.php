
<!-- here just select -->
<!-- <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Alerte de Feedback</title>
Inclure CSS de Bootstrap
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
Ajouter des styles supplémentaires si nécessaire
.modal-feedback {
  background-color: #f8f9fa;
  border-radius: 5px;
  padding: 20px;
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 300px;
  box-shadow: 0 5px 15px rgba(0,0,0,.5);
}
.close {
  float: right;
  font-size: 1.5rem;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}
</style>
</head>
<body>

Bouton pour ouvrir le modal de feedback
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
  Donnez votre avis
</button>

Modal de feedback
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-feedback">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalLabel">Nous voulons votre opinion !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="satisfaction">Quelle est votre niveau de satisfaction avec notre produit ?</label>
            <select class="form-control" id="satisfaction">
              <option>Très insatisfait</option>
              <option>Insatisfait</option>
              <option>Neutre</option>
              <option>Satisfait</option>
              <option>Très satisfait</option>
            </select>
          </div>
          <div class="form-group">
            <label for="feedback-text">Qu'aimez-vous ou n'aimez-vous pas dans notre produit ?</label>
            <textarea class="form-control" id="feedback-text" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Continuer</button>
      </div>
    </div>
  </div>
</div>

Scripts de Bootstrap
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>  -->












<!-- 3 checkbox and emoji -->

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Alerte de Feedback Avancée</title>
<!-- Inclure CSS de Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css2/jquery-3.7.1.min.map"/>
<link rel="stylesheet" href="css2/bootstrap.min.css"/>
<style>
/* Styles personnalisés pour le modal de feedback */
.modal-feedback {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,.5);
}
.modal-header, .modal-footer {
  border-bottom: none;
  border-top: none;
}
.close {
  float: right;
  font-size: 1.5rem;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}
/* Ajouter des styles pour les émojis */
.emoji-rating {
  font-size: 1.5rem;
  cursor: pointer;
}
.emoji-rating:not(:last-child) {
  margin-right: 15px;
}
/* Cacher les inputs radio par défaut */
/* .emoji-rating input[type="radio"] {
  display: none;
} */
/* Style pour l'emoji sélectionné */
.emoji-rating input[type="radio"]:checked + label {
  transform: scale(1.3);
}
</style>
</head>
<li>

<!-- Bouton pour ouvrir le modal de feedback -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
  Donnez votre avis
</button>

<!-- Modal de feedback -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-feedback">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalLabel">Nous voulons votre opinion !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="feedbackForm">
          <div class="form-group">
            <label for="satisfaction">Quelle est votre niveau de satisfaction avec notre produit ?</label>
            <div class="emoji-rating">
              <input type="radio" id="very-dissatisfied" name="satisfaction" value="1">
              <label for="very-dissatisfied">😠</label>
              <input type="radio" id="dissatisfied" name="satisfaction" value="2">
              <label for="dissatisfied">😐</label>
              <input type="radio" id="neutral" name="satisfaction" value="3">
              <label for="neutral">😑</label>
              <input type="radio" id="satisfied" name="satisfaction" value="4">
              <label for="satisfied">😊</label>
              <input type="radio" id="very-satisfied" name="satisfaction" value="5">
              <label for="very-satisfied">🤩</label>
            </div>
          </div>
          <div class="form-group">
            <label for="feedback-text">Qu'aimez-vous ou n'aimez-vous pas dans notre produit ?</label>
            <textarea class="form-control" id="feedback-text" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" onclick="submitFeedback()">Continuer</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts de Bootstrap -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
 //Fonction pour soumettre le feedback
function submitFeedback() {
  var form = document.getElementById(' ');
   //Ici, vous pouvez ajouter la logique pour envoyer les données du formulaire
  console.log("Feedback soumis avec succès !");
  $('#feedbackModal').modal('hide');
}
</script>

</body>
</html> 


<!-- emoji -->
<!-- <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Alerte de Feedback Dynamique</title>
Inclure CSS de Bootstrap
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
Styles personnalisés pour le modal de feedback
.modal-feedback {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,.5);
  animation: slideIn 0.5s;
}
@keyframes slideIn {
  from {
    transform: translateY(100%);
  }
  to {
    transform: translateY(0);
  }
}
.modal-header, .modal-footer {
  border-bottom: none;
  border-top: none;
}
.close {
  float: right;
  font-size: 1.5rem;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}
/* Styles pour les émojis avec animation */
.emoji-rating label {
  font-size: 1.5rem;
  cursor: pointer;
  transition: transform 0.3s;
}
.emoji-rating label:hover,
.emoji-rating input[type="radio"]:checked + label {
  transform: scale(1.3);
}
</style>
</head>
<body>

Bouton pour ouvrir le modal de feedback
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
  Donnez votre avis
</button>

Modal de feedback
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-feedback">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalLabel">Nous voulons votre opinion !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="feedbackForm">
          <div class="form-group emoji-rating">
            <p>Quelle est votre niveau de satisfaction avec notre produit ?</p>
            Les émojis pour la satisfaction
            <input type="radio" id="very-dissatisfied" name="satisfaction" value="1" hidden>
            <label for="very-dissatisfied">😠</label>
            <input type="radio" id="dissatisfied" name="satisfaction" value="2" hidden>
            <label for="dissatisfied">😐</label>
            <input type="radio" id="neutral" name="satisfaction" value="3" hidden>
            <label for="neutral">😑</label>
            <input type="radio" id="satisfied" name="satisfaction" value="4" hidden>
            <label for="satisfied">😊</label>
            <input type="radio" id="very-satisfied" name="satisfaction" value="5" hidden>
            <label for="very-satisfied">🤩</label>
          </div>
          <div class="form-group">
            <label for="feedback-text">Qu'aimez-vous ou n'aimez-vous pas dans notre produit ?</label>
            <textarea class="form-control" id="feedback-text" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" onclick="submitFeedback()">Continuer</button>
      </div>
    </div>
  </div>
</div>

Scripts de Bootstrap
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
 //Fonction pour soumettre le feedback
function submitFeedback() {
  var form = document.getElementById('feedbackForm');
   //Ici, vous pouvez ajouter la logique pour envoyer les données du formulaire
  console.log("Feedback soumis avec succès !");
  $('#feedbackModal').modal('hide');
}
</script>

</body>
</html>  -->
