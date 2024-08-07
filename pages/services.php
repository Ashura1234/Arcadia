<?php 
session_start();
?>

<body>
    <div class="hero-scene text-center text-white">
      <div class="hero-scene-content">
        <h1>Services</h1>
      </div>
    </div>

<section>
    <article>
      <div class="container p-4">
        <div class="row pb-4 bg-black arrondie">
          <h2 class="text-center text-dark col-12"><u>Restauration</u></h2>
          <div class="col-md-2">
            <img class="arrondie w-100" src="../images/hamburger.jpg" />
          </div>
          <div class="col-md-10">
            <p class="text-white">Le Zoo Arcadia propose une gamme variée d'options de restauration pour répondre aux besoins et aux envies de tous les visiteurs...</p>
            <div class="text-right">
              <a href="/reservationRestauration" class="btn btn-dark">détails</a>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editionHabitatModal" data-show="employe">modifier</button>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section>
    <article>
      <div class="container p-4">
        <div class="row pb-4 bg-secondary arrondie">
          <h2 class="text-center text-black col-12"><u>Balades en petit train</u></h2>
          <div class="col-md-2">
            <img class="arrondie w-100" src="../images/csm_Train_c2b02bab44.jpg" />
          </div>
          <div class="col-md-10">
            <p class="text-black">Embarquez pour une aventure pittoresque à bord de notre petit train ! Les balades en petit train sont une manière amusante et relaxante de découvrir...</p>
            <div class="text-right">
              <a href="/reservationBalade" class="btn btn-dark">détails</a>
              <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section>
    <article>
      <div class="container p-4">
        <div class="row pb-4 bg-black arrondie">
          <h2 class="text-center text-dark col-12"> <u>Visites guidées</u></h2>
          <div class="col-md-2">
            <img class="arrondie w-100" src="../images/guides.jpg" />
          </div>
          <div class="col-md-10">
            <p class="text-white">Pour une expérience encore plus enrichissante, optez pour l'une de nos visites guidées ! Nos guides expérimentés vous emmèneront à travers le parc...</p>
            <div class="text-right">
              <a href="/reserverVisite" class="btn btn-dark">détails</a>
              <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Modal -->
<div class="modal fade" id="editionHabitatModal" tabindex="-1" aria-labelledby="editionHabitatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editionHabitatModalLabel">Edition du service proposé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
              <div class="mb-3">
                <label for="PictureInput" class="form-label">Modifier la photo </label>
                <input type="file" class="form-control" id="PictureInput" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="DescriptionInput" class="form-label">modifier la description du services</label>
                <input type="text" class="form-control" id="DescriptionInput">
              </div>
              <button type="button" class="btn btn-secondary" id="btn-connexion" data-bs-dismiss="modal"> Annuler </button>
              <button type="button" class="btn btn-primary" id="btn-connexion"> Enregistrer les modification </button>
            </form>
      </div>
    </div>
  </div>
</div>

