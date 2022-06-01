<?php

require_once './modeles/veterinaires.php';

class ControlleurVeterinaire {

    function afficherListe() {
        $veterinaires = modele_veterinaire::ObtenirTous();
        require './vues/produits/listeVeterinaires.php';
    }

}

?>