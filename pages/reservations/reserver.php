<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>Faire une réservation</h1>
        </div>
</div>

<div class="container pt-4">
    <form>
      <div class="mb-3">
        <label for="ServiceSelect" class="form-label">Type de Service</label>
        <select class="form-control" id="ServiceSelect">
            <option value="">Sélectionnez un service</option>
            <option value="restauration">Restauration</option>
            <option value="balades_petit_train">Balades en Petit Train</option>
            <option value="visites_guidées">Visites Guidées</option>
        </select>
    </div>
        <div class="mb-3">
            <label for="NomInput" class="form-label">Nom</label>
            <input type="text" class="form-control" id="NomInput" placeholder="Votre Nom">
          </div>
        <div class="mb-3">
            <label for="PrénomInput" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="Prénom" placeholder="Votre Prénom">
          </div>
        <div class="mb-3">
            <label for="NbConvivesInput" class="form-label">Nombre de personne</label>
            <input type="number" class="form-control" id="NbConvivesInput" placeholder="pour combien de personne souhaitez-vous réserver ?">
          </div>
          <div class="mb-3">
            <label for="AllergieInput" class="form-label">Allergie</label>
            <input type="text" class="form-control" id="AllergieInput" placeholder="Êtes-vous allergique à quelque chose ?">
          </div>
</div>
<div class="text-center">
  <a href="/services" class="btn btn-danger"> Annuler</a>
  <a href="/ficheReservation" class="btn btn-primary" type="submit"> Valider ma réservation</a>
</div>