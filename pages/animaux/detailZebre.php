<?php 
session_start();
?>


<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>La maison des zèbres</h1>
        </div>
</div>

<div class="container p-4">
            <div class="ficheIdentite">
                <div class="card bg-primary">
                    <div class="content text-white">
                        <h3 class="text-black text-center"> <u>l'habitat des zèbres</u></h3>
                        <p class="text-black p-4">L'habitat des zèbres au Zoo Arcadia est conçu pour recréer les plaines africaines où ces animaux vivent naturellement. Cet espace spacieux et ouvert offre un environnement qui répond à leurs besoins physiques et sociaux.
                            L'habitat s'étend sur une grande superficie, permettant aux zèbres de galoper librement et de socialiser en troupeaux.
Le terrain est composé de vastes prairies, idéales pour le pâturage. Plusieurs arbres et arbustes sont plantés pour fournir de l'ombre naturelle, offrant des refuges frais pendant les journées chaudes.
Des abris supplémentaires construits avec des matériaux naturels sont disponibles pour une protection contre le soleil et les intempéries. Des points d'eau sont disséminés dans l'habitat pour que les zèbres puissent boire régulièrement.
Les zèbres peuvent également patauger dans de petits étangs, ce qui les aide à se rafraîchir. Des structures d'enrichissement, telles que des tas de foin et des balles de jeu, sont placées dans l'habitat pour stimuler leur curiosité et encourager des comportements naturels.
Des parfums et des aliments sont cachés dans l'habitat pour encourager la recherche de nourriture. L'habitat est conçu avec des barrières de sécurité discrètes pour assurer la sécurité des visiteurs tout en permettant une observation rapprochée des zèbres.
Des plateformes d'observation permettent aux visiteurs de voir les zèbres dans leur habitat naturel sans les perturber.
                        </p>
                        <div class="row row-cols-2 p-4 text-align">
                            <div class="pl-4">
                                <h4 class="text-black text-center"><u>Fiche d'identité de Marty</u></h4>
                        <ul>
                            <li><strong>Nom :</strong> Marty</li>
                            <li><strong>Espèce :</strong>  Zèbre de Grévy</li>
                            <li><strong>Sexe :</strong> Mâle</li>
                            <li><strong>Poids :</strong> 400 kg</li>
                            <li><strong>Taille :</strong> 1,6m du museau à la queue</li>
                            <li><strong>Ages :</strong> 7 ans</li>  
                            <li><strong>Habitat :</strong> Forêt de bambous et arbres denses aménagés pour reproduire son environnement naturel.</li>
                            <li><strong>Date de naissance :</strong> 12 mars 2018</li>
                            <li><strong>Alimentation :</strong> Melman est herbivore, 15kg d'herbe et de foin, 2kg de graines et de légumes.</li>
                            <li><strong>Enrichissement Alimentaire :</strong>Branches d’arbres et écorces pour ronger, fruits et légumes cachés pour stimuler la recherche de nourriture</li>
                            <li><strong>Caractéristiques physiques :</strong> Rayures noires et blanches distinctives, yeux marron clair avec de longues cils, griffes solides adaptés pour les terrains arides, dents adaptées pour mâcher l’herbe et les plantes dures</li>
                           <h5 class="text-black">état de santé :</h5>
                           <li><strong>Dernière visite du vétérinaire :</strong> le 10 juillet 2024</li>
                           <h5 class="text-black">observation :</h5>
                           <li><strong>En bonne santé générale</strong>
                            <li><strong>Surveillance régulière de la dentition et des sabots</strong>
                                <li><strong>Programme de vaccination à jour</strong>

                        </ul>
                    </div>
                        <div class="image">
                            <img src="../images/melman_3.jpg" class="arrondie image" width="100%">
                        </div>
                    </div>
                    </div>
                    <div class="text-center p-4">
                        <button type="button" class="btn btn-dark" data-show="veterinaire" data-bs-toggle="modal" data-bs-target="#editionHabitatModal">modifier</button>
                    </div>
                </div>
            </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editionHabitatModal" tabindex="-1" aria-labelledby="editionHabitatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editionHabitatModalLabel">Edition de la description de l'animal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="PictureInput" class="form-label">Modifier les photos </label>
                  <input type="file" class="form-control" id="PictureInput" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="DescriptionInput" class="form-label">Modifier la description de l'habitat </label>
                    <input type="text" class="form-control" id="DescriptionInput">
                  </div>
                <div class="mb-3">
                  <label for="DescriptionInput" class="form-label">Modifier la description de l'animal</label>
                  <input type="text" class="form-control" id="DescriptionInput">
                </div>
                <div class="mb-3">
                    <label for="DescriptionInput" class="form-label">Compte rendu du vétérinaire</label>
                    <input type="text" class="form-control" id="DescriptionInput">
                  </div>
                <button type="button" class="btn btn-secondary" id="btn-connexion" data-bs-dismiss="modal"> Annuler </button>
                <button type="button" class="btn btn-primary" id="btn-connexion"> Enregistrer les modifications </button>
              </form>
        </div>
      </div>
    </div>
  </div>
  