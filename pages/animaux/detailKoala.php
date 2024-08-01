<?php 
session_start();
?>


<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>La maison des Koala</h1>
        </div>
</div>

<div class="container p-4">
            <div class="ficheIdentite">
                <div class="card bg-primary">
                    <div class="content text-white">
                        <h3 class="text-black text-center"> <u>l'habitat des Koala</u></h3>
                        <p class="text-black p-4">L'habitat du koala au Zoo Arcadia est soigneusement conçu pour refléter l'environnement naturel des forêts d'eucalyptus d'Australie, offrant un cadre serein et adapté aux besoins spécifiques de cette espèce. L'habitat est planté d'eucalyptus, fournissant non seulement de la nourriture mais aussi des abris naturels.
                            Divers types de végétation sont disposés pour créer un environnement riche et varié. Des arbres et des branches à différentes hauteurs permettent aux koalas de grimper et de se reposer confortablement.
                            Des plateformes en hauteur sont aménagées pour simuler les zones de repos en hauteur qu'ils utilisent dans la nature.
                            Des zones ombragées et des abris sont disponibles pour protéger les koalas de la chaleur et des intempéries.
                            Des lits de branches et de feuillage sont aménagés pour leur confort.
                            L'habitat dispose de systèmes de brumisation pour maintenir une humidité adéquate et des températures confortables.
                            Des zones chauffées sont disponibles pour les jours plus frais. Des jouets et des éléments interactifs sont disposés pour stimuler leur curiosité et leurs comportements naturels.
                            Les feuilles d'eucalyptus sont disposées à différents endroits pour encourager la recherche de nourriture. Des barrières discrètes et des vitres transparentes permettent une observation rapprochée tout en assurant la sécurité des koalas.
                            Des plateformes d'observation surélevées permettent aux visiteurs de voir les koalas dans leurs activités quotidiennes.                                                        
                        </p> 
                        <div class="row row-cols-2 p-4 text-align">
                            <div class="pl-4">
                                <h4 class="text-black text-center"><u>Fiche d'identité de Koko</u></h4>
                        <ul>
                            <li><strong>Nom :</strong> Koko</li>
                            <li><strong>Espèce :</strong>  Koala (Phascolarctos cinereus)</li>
                            <li><strong>Sexe :</strong> Mâle</li>
                            <li><strong>Poids :</strong> 8 kg</li>
                            <li><strong>Taille :</strong> 75cm </li>
                            <li><strong>Ages :</strong> 6 ans</li>  
                            <li><strong>Habitat :</strong> Forêt de bambous et arbres denses aménagés pour reproduire son environnement naturel.</li>
                            <li><strong>Date de naissance :</strong> 12 mars 2018</li>
                            <li><strong>Alimentation :</strong> 500g de feuilles d'eucalyptus</li>
                            <li><strong>Enrichissement Alimentaire :</strong>Feuilles d'arbres spécifiques, écorces, feuilles d'eucalyptus disposées à différentes hauteurs, branches fraîches pour le grignotage.                           </li>
                            <li><strong>Caractéristiques physiques :</strong> pelage gris argenté avec des touches blanches sur le ventre, yeux grands ronds et expressifs, oreilles rondes et couvertes de fourrure dense, griffes Longues et acérées adaptées à l'escalade. </li>
                           <h5 class="text-black">état de santé :</h5>
                           <li><strong>Dernière visite du vétérinaire :</strong> le 15 juin 2024</li>
                           <h5 class="text-black">observation :</h5>
                           <li><strong>En bonne santé générale</strong>
                            <li><strong>Surveillance régulière des dents et des griffes</strong>
                                <li><strong>Programme de vaccination à jour</strong>
                        </ul>
                    </div>
                        <div class="image">
                            <img src="../images/koko_1.jpg" class="arrondie image" width="100%">
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
  
  