<?php

require 'Autoloader.php'; 
Autoloader::register(); 

class ChantierManager {

    private $listeChantier;

    public function addChantier($annee, $mois, $titre) {
        $this->listeChantier[]= new Chantier ($annee, $mois, $titre);
    }
    
    public function displayListeChantier(){
        $this->listeChantier = $listeChantier;
        echo $listeChantier;
    }
}
?>