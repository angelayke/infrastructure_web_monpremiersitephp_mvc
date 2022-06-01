<?php

include_once "./include/config.php";

class modele_veterinaire {
    public $id; 
    public $id_specialite; 
    public $nom_veto;
    public $prenom_veto;
    public $nom_specialite;

    public function __construct($nom_veto, $prenom_veto, $nom_specialite) {
       // $this->id = $id;
       // $this->id_specialite = $id_specialite;
        $this->nom_veto = $nom_veto;
        $this->prenom_veto = $prenom_veto;
        $this->nom_specialite = $nom_specialite;
    }

    static function connecter() {
        
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        // Vérifier la connexion
        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;
            exit();
        } 

        return $mysqli;
    }

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT nom_veto, prenom_veto, nom_specialite FROM veterinaires 
        INNER JOIN specialites ON specialites.id = veterinaires.id_specialite ORDER BY nom_veto");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_veterinaire($enregistrement['nom_veto'], $enregistrement['prenom_veto'], $enregistrement['nom_specialite']);
        }

        return $liste;
    }
}

?>