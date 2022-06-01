<?php

require_once './modeles/animaux.php';

class ControlleurAnimal {

    function afficherTableau() {
        $animaux = modele_animal::ObtenirTous();
        require './vues/produits/tableauAnimaux.php';
    }

}

?>