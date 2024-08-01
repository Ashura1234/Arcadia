<?php 
session_start();
var_dump($_SESSION);
?>

<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>Habitat</h1>
        </div>
</div>


<section>
    <article>
        <div class="container p-4">
            <div class="row row-cols-2 pb-4 bg-black arrondie">
                <h2 class="text-center text-dark col-12"><u>L'habitat du tigre</u></h2>
                <div class="col-md-2"> 
                    <img class="arrondie w-100" src="../images/abris.jpg"/>     
                </div>
                <div class="col-md-10">
                    <p class="text-white">L'habitat du tigre d'Afrique au Zoo Arcadia a été soigneusement conçu pour offrir à cette espèce majestueuse un environnement aussi proche de son habitat naturel que possible. Ce vaste espace aménagé offre une immersion totale dans les contrées sauvages africaines, avec des zones ombragées luxuriantes, des arbres imposants et des rochers qui imitent les paysages rocheux des savanes.
                        Chaque élément de l'habitat a été pensé pour répondre aux besoins spécifiques des tigres d'Afrique, offrant des endroits pour se reposer à l'ombre, grimper aux arbres, ou se cacher parmi les buissons. Des points d'eau sont dispersés dans l'habitat, offrant aux tigres la possibilité de se rafraîchir et de s'hydrater. </p>
                        <div style="text-align: right;">
                            <a href="/detailTigre" class="btn btn-dark">détails</a>
                            <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </article>
</section>
<section>
    <article>
        <div class="container p-4">
            <div class="row row-cols-2 pb-4 bg-secondary arrondie">
                <h2 class="text-center text-black col-12"><u> Habitat des zèbres </u></h2>
                <div class="col-md-2"> 
                    <img class="arrondie w-100" src="../images/habitatZebre.jpg"/>     
                </div>
                <div class="col-md-10">
                    <p class="text-black">L'habitat des zèbres au Zoo Arcadia est une représentation fidèle des vastes plaines herbeuses des savanes africaines. Cette étendue ouverte offre aux zèbres un environnement idéal pour se déplacer et se nourrir en toute liberté. Des herbes hautes ondulent au gré du vent, offrant aux zèbres des zones de pâturage abondantes.
                        Les visiteurs peuvent observer les troupeaux de zèbres se déplaçant gracieusement à travers les prairies, leur pelage rayé se confondant avec les hautes herbes. Les zèbres utilisent leur vision panoramique pour repérer les prédateurs potentiels tout en se déplaçant en groupe pour assurer leur sécurité. </p>
                        <div style="text-align: right;">
                            <a href="/detailZebre" class="btn btn-dark">détails</a>
                            <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </article>
</section>
<section>
    <article>
        <div class="container p-4">
            <div class="row row-cols-2 pb-4 bg-black arrondie">
                <h2 class="text-center text-dark col-12"><u> Habitat des Girafes </u></h2>
                <div class="col-md-2"> 
                    <img class="arrondie w-100" src="../images/habitatGirafe.jpg"/>     
                </div>
                <div class="col-md-10">
                    <p class="text-white">L'habitat des girafes au Zoo Arcadia est une représentation fidèle des vastes étendues des savanes africaines. Cette zone spacieuse offre aux girafes un environnement riche en végétation et en points d'eau, leur permettant de se déplacer librement et de trouver facilement leur nourriture préférée.
                        Des arbres acacias s'élèvent majestueusement à travers la savane, offrant aux girafes des branches feuillues à portée de cou pour se nourrir. Les visiteurs peuvent observer ces élégants herbivores se déplacer avec grâce à travers les plaines, utilisant leur long cou pour atteindre les feuilles les plus tendres des arbres. </p>
                        <div style="text-align: right;">
                            <a href="/detailGirafe" class="btn btn-dark">détails</a>
                            <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
                        </div>  
                    </div>
                </div>
        </div>
        </div>
    </article>
</section>
<section>
    <article>
        <div class="container p-4">
            <div class="row row-cols-2 pb-4 bg-secondary arrondie">
                <h2 class="text-center text-black col-12"> <u> Habitat des Koalas</u></h2>
                <div class="col-md-2"> 
                    <img class="arrondie w-100" src="../images/habitatKoala.jpg"/>     
                </div>
                <div class="col-md-10">
                    <p class="text-black">L'habitat des koalas au Zoo Arcadia est une enclave de verdure luxuriante inspirée des forêts d'eucalyptus de la côte est de l'Australie. Ce sanctuaire végétal offre aux koalas des arbres d'eucalyptus majestueux, des branches épaisses pour se reposer et des zones ombragées pour se protéger du soleil. Les visiteurs peuvent observer les koalas se nourrir de feuilles d'eucalyptus, dormir paisiblement dans les branches, ou jouer avec leurs congénères. C'est une expérience unique qui permet aux visiteurs de se rapprocher de ces adorables marsupiaux et de découvrir leur mode de vie caractéristique. </p>
                        <div style="text-align: right;">
                            <a href="/detailKoala" class="btn btn-dark">détails</a>
                            <button type="button" class="btn btn-primary" data-show="employe" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
                        </div>
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
          <h5 class="modal-title" id="editionHabitatModalLabel">Edition de l'Habitat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="PictureInput" class="form-label">Modifier la photo </label>
                  <input type="file" class="form-control" id="PictureInput" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="DescriptionInput" class="form-label">modifier la description de l'habitat</label>
                  <input type="text" class="form-control" id="DescriptionInput">
                </div>
                <button type="button" class="btn btn-secondary" id="btn-connexion" data-bs-dismiss="modal"> Annuler </button>
                <button type="button" class="btn btn-primary" id="btn-connexion"> Enregistrer les modification </button>
              </form>
        </div>
      </div>
    </div>
  </div>
