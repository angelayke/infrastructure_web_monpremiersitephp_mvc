<?php

require_once './modeles/rendezvous.php';

class ControlleurRendezVous {

    function afficherBloc() {
        $rendezvous1 = modele_rendezvous::ObtenirTous();
        require './vues/produits/blocRendezVous.php';
    }

}

?>