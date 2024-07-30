<?php 
session_start();
?>


<div class="hero-scene text-center text-white">
    <div class=" hero-scene-content">
        <h1>La maison des Tigres</h1>
        </div>
</div>

<div class="container p-4">
            <div class="ficheIdentite">
                <div class="card bg-primary">
                    <div class="content text-white">
                        <h3 class="text-black text-center"> <u> L'habitat des tigres</u></h3>
                        <p class="text-black p-4">L'habitat s'étend sur plusieurs hectares, permettant aux tigres de se déplacer librement et de trouver des zones pour chasser, jouer et se reposer.
                            Le terrain est varié avec des collines douces, des zones herbeuses et des boisés pour offrir un environnement stimulant.Plusieurs arbres et arbustes sont plantés pour fournir de l'ombre naturelle, créant des refuges frais pendant les journées ensoleillées.
                            Des abris construits avec des matériaux naturels offrent des endroits supplémentaires pour se protéger du soleil et de la pluie.Des rochers et des formations rocheuses sont disposés dans l'habitat pour permettre aux tigres de grimper, d'aiguiser leurs griffes et de surveiller leur territoire.
                            Des bassins d'eau sont aménagés pour que les tigres puissent boire et se rafraîchir. Ils adorent nager et jouer dans l'eau, ce qui est une activité essentielle pour leur bien-être. Des jouets et des structures d'enrichissement, comme des troncs d'arbres et des cordes, sont placés dans l'habitat pour stimuler leur instinct de chasse et leur curiosité.
                            Des parfums et des aliments sont parfois cachés dans l'habitat pour encourager les comportements naturels de recherche de nourriture. L'habitat est conçu avec des barrières de sécurité invisibles pour assurer la sécurité des visiteurs tout en permettant une observation rapprochée des tigres.                                                        
                        </p> 
                        <div class="row row-cols-2 p-4 text-align">
                            <div class="pl-4">
                                <h4 class="text-black text-center"><u>Fiche d'identité de Baguéra</u></h4>
                        <ul>
                            <li><strong>Nom :</strong> Baguéra</li>
                            <li><strong>Espèce :</strong> Tigre d'Afrique</li>
                            <li><strong>Sexe :</strong> Mâle</li>
                            <li><strong>Poids :</strong> 220kg</li>
                            <li><strong>Taille :</strong> 3,1m du museau à la queue</li>
                            <li><strong>Ages :</strong> 8 ans</li>  
                            <li><strong>Habitat :</strong> Forêt de bambous et arbres denses aménagés pour reproduire son environnement naturel.</li>
                            <li><strong>Date de naissance :</strong> 12 mars 2018</li>
                            <li><strong>Alimentation :</strong> Lapins et autres petites proies pour simuler la chasse.</li>
                            <li><strong>Caractéristiques physiques :</strong> Pelage noir et blanc distinctif, silhouette imposante, yeux entourés de larges taches noires.</li>
                           <h5 class="text-black">état de santé :</h5>
                           <li><strong>Dernière visite du vétérinaire :</strong> le 15 juin 2024</li>
                           <h5 class="text-black">observation :</h5>
                           <li><strong>En bonne santé générale</strong>
                            <li><strong>Surveillance régulière de la dentition et des griffes</strong>
                                <li><strong>Programme de vaccination à jour</strong>

                        </ul>
                    </div>
                        <div class="image">
                            <img src="../images/baguera.jpg" class="arrondie image" width="100%">
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
  
  