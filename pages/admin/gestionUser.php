<?php 
session_start();
?>


<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>Gestion des Utilisateurs</h1>
        </div>
</div>
   
   
   
   <div class="containe p-4">
    <h2 class="text-primary text-center"> <u>Ajouter un nouvel utilisateur </u></h2>
   <form class="row p-4 bg-black arrondie text-white">
    <div class="mb-3">
        <label for="prenomCreateInput" class="form-label">Prénom de l'utilisateur</label>
        <input type="text" class="form-control" id="prenomCreateInput" aria-describedby="prenomCreateInput">
        <div id="prenomCreateInput" class="form-text"></div>
        <div class="invalid-feedback">
            Veillez renseigner le prénom de l'utilisateur
        </div>
        <div class="mb-3">
            <label for="nomCreateInput" class="form-label">Nom de l'utilisateur</label>
            <input type="text" class="form-control" id="nomCreateInput" aria-describedby="nomCreateInput">
            <div id="nomCreateInput" class="form-text"></div>
            <div class="invalid-feedback">
                Veillez renseigner le nom de l'utilisateur 
            </div>
        <div class="mb-3">
            <label for="mailCreateInput" class="form-label">mail de l'utilisateur</label>
            <input type="mail" class="form-control" id="mailCreateInput" aria-describedby="mailCreateInput">
            <div id="mailCreateInput" class="form-text"></div>
            <div class="invalid-feedback">
                Le format du mail est incorrecte 
            </div>
            </div>
            <div class="mb-3">
                <label for="mdpCreateInput" class="form-label">mot de passe de l'utilisateur</label>
                <input type="password" class="form-control" id="mdpCreateInput" aria-describedby="mdpCreateInput">
                <div id="mdpCreateInput" class="form-text"></div>
                <div class="invalid-feedback">
                    Le mot de passe doit contenir au moins 8 charactère dont une lettre MAJUSCULE, une lettre minuscule, un chiffre et un charactère spécial
                </div>
                </div>
                <div class="mb-3">
                    <label for="roleCreateInput" class="form-label">Role de l'utilisateur</label>
                    <input type="text" class="form-control" id="roleCreateInput" aria-describedby="roleCreateInput">
                    <div id="roleCreateInput" class="form-text"></div>
                    <div class="invalid-feedback">
                        Vous devez créer un rôle à cette utilisateur
                    </div>
                <div class="col-md-">
                <button class="btn btn-primary" id="btn-creation">Valider</button>
            </div>
    </form>
    <hr class="divider">
</div>


<div class="container p-4">
    <h2 class="text-primary text-center"> <u>Modifier les utilisateurs existants </u></h2>
    <div class="row p-4 bg-black arrondie text-white">
        <div class="bg-black" id="allUsers">
    </div>
</div>
</div>
