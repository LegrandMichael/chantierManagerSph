<?php

require 'Autoloader.php'; 
Autoloader::register();

class Chantier {
    
    private $annee;
    private $mois;
    private $titre;

    public function displayChantier(){
        echo "<h2>Année ".$annee."</h2>\
            <table>\
                <tr><th>Mois</th><th>Nom Chantier</th></tr>\
                <tr><td>".$mois."</td><td>".$titre."</td></tr>\
            </table>";
    }
}

?>