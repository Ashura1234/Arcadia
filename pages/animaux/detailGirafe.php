<?php 
session_start();
?>


<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>La maison des girafes</h1>
        </div>
</div>

<div class="container p-4">
            <div class="ficheIdentite">
                <div class="card bg-primary">
                    <div class="content text-white">
                        <h3 class="text-black text-center"> <u>l'habitat des girafes</u></h3>
                        <p class="text-black p-4">L'habitat des girafes au Zoo Arcadia est conçu pour imiter les savanes africaines, offrant un environnement spacieux et diversifié où les girafes peuvent se déplacer librement et accéder à une variété de plantes pour se nourrir.L'habitat est conçu avec de hauts arbres et des structures élevées pour permettre aux girafes d'étirer leur cou et de brouter des feuilles en hauteur.
                            Le terrain est vaste, avec des zones herbeuses pour la marche et des aires dégagées pour se reposer. Des arbres et des auvents fournissent de l'ombre pour que les girafes puissent se protéger du soleil.
                            Des abris construits avec des matériaux naturels offrent des refuges contre les intempéries.
                            Des abreuvoirs sont placés à des hauteurs appropriées pour que les girafes puissent boire facilement.
                            De petits bassins permettent aux girafes de se rafraîchir et de jouer dans l'eau. Des branches suspendues, des bûches et des structures de grimpe sont placées pour stimuler les comportements naturels de navigation.
                            Des aliments sont dispersés dans l'habitat pour encourager la recherche de nourriture. Des barrières discrètes assurent la sécurité des visiteurs tout en permettant une vue rapprochée des girafes.
                            Des plateformes d'observation surélevées permettent aux visiteurs de voir les girafes de près sans les déranger.                            
                        </p>
                        <div class="row row-cols-2 p-4 text-align">
                            <div class="pl-4">
                                <h4 class="text-black text-center"><u>Fiche d'identité de Melman</u></h4>
                        <ul>
                            <li><strong>Nom :</strong> Melman</li>
                            <li><strong>Espèce :</strong>  Zèbre de Grévy</li>
                            <li><strong>Sexe :</strong> Femelle</li>
                            <li><strong>Poids :</strong> 1 100 kg</li>
                            <li><strong>Taille :</strong> 5,2m</li>
                            <li><strong>Ages :</strong> 10 ans</li>  
                            <li><strong>Habitat :</strong> Forêt de bambous et arbres denses aménagés pour reproduire son environnement naturel.</li>
                            <li><strong>Date de naissance :</strong> 12 mars 2014</li>
                            <li><strong>Alimentation :</strong> 30kg  de euilles et branches d'acacia.</li>
                            <li><strong>Enrichissement Alimentaire :</strong>3 kg de fruits et légumes, Branches suspendues à différentes hauteurs pour stimuler la recherche de nourriture, Fruits et légumes dispersés pour encourager le déplacement.</li>
                            <li><strong>Caractéristiques physiques :</strong> Taches brunes distinctes, yeux grands et expressifs avec de longs cils, cou Long et puissant adapté pour atteindre les feuillages élevés, langue mesurant jusqu'à 45 cm, idéale pour attraper les feuilles.</li>
                           <h5 class="text-black">état de santé :</h5>
                           <li><strong>Dernière visite du vétérinaire :</strong> le 20 juin 2024</li>
                           <h5 class="text-black">observation :</h5>
                           <li><strong>En bonne santé générale</strong>
                            <li><strong>Surveillance régulière de la dentition et des sabots</strong>
                                <li><strong>Programme de vaccination à jour</strong>

                        </ul>
                    </div>
                        <div class="image">
                            <img src="../images/melman_girafe.jpg" class="arrondie image" width="100%">
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
  
  