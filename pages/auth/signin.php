<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Connexion</h1>
    </div>
</div>

<div class="container pt-4">
    <form action="functions/loginUser.php" method="POST">
        <div class="mb-3">
            <label for="emailInput" class="form-label">Mail</label>
            <input type="email" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text"></div>
            
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="passwordInput" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" id="btn-connexion">Connexion</button>
    </form>
    <div class="text-primary text-center">
        <a href="/signup">Tu n'as pas de compte ? Cliquez ici pour t'inscrire !</a>
    </div>
</div>
