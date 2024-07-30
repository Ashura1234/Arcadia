<?php 
session_start();
?>

<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>Inscription</h1>
        </div>
</div>


<div class="container pt-4">
    <form action="functions/createUser.php" method="POST">
        <div class="mb-3">
          <label for="prenomInput" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenomInput" aria-describedby="prenomInput" name="prenom">
          <div id="prenomInput" class="form-text"></div>
          <div class="invalid-feedback">
            Ce champ est obligatoire 
        </div>
        </div>
        <div class="mb-3">
            <label for="nomInput" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nomInput" aria-describedby="nomInput" name="nom">
            <div id="nomInput" class="form-text"></div>
            <div class="invalid-feedback">
              Ce champ est obligatoire 
          </div>
          </div>
          <div class="mb-3">
            <label for="mailInput" class="form-label">Mail</label>
            <input type="email" class="form-control" id="mailInput" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text"></div>
            <div class="invalid-feedback">
              Mail invalide 
          </div>
          </div>
        <div class="mb-3">
          <label for="mdpInput" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="mdpInput" name="password">
          <div class="invalid-feedback">
              Le mot de passe doit contenir au moins 8 charactère dont une lettre MAJUSCULE, une lettre minuscule, un chiffre et un charactère spécial
          </div>
        </div>
        <div class="mb-3">
            <label for="mdpValideInput" class="form-label">Confirmation de mot de passe</label>
            <input type="password" class="form-control" id="mdpValideInput">
            <div class="invalid-feedback">
              Le mot de passe ne correspond pas  
          </div>
          </div>
        <button type="submit" class="btn btn-primary" id="btn-inscription">Valider</button>
      </form>
      <div class="text-primary text-center">
        <a href="/signin">tu as déjà un compte ? cliques ici pour te connecter !</a>
      </div>
</div>