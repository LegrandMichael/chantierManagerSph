<?php

require 'Classes/Autoloader.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Chantier Manager SPH</title>
</head>
<body>
    <div class="page-header text-center">
      <h1>Liste des chantiers<br><small>Toutes années</small></h1>
      
      
      <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Ajouter un chantier</a>
      <div class="modal fade" id="modal-id">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Mon nouveau chantier</h4>
                  </div>
                  <div class="modal-body">
                      <form action="" method="POST" role="form">
                          <div class="form-group">
                              <label for="annee">Année</label>
                              <input type="text" class="form-control" id="annee" placeholder="Veuillez saisir l'année">
                              <label for="mois">Mois</label>
                              <input type="text" class="form-control" id="mois" placeholder="Veuillez saisir le mois">
                              <label for="titre">Titre</label>
                              <input type="text" class="form-control" id="titre" placeholder="Veuillez saisir le titre">
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                      <button type="submit" class="btn btn-primary">Ajouter le chantier</button>
                  </div>
              </div>
          </div>
      </div>

      
      
    </div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
</body>
</html>