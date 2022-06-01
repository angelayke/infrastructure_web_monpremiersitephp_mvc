<?php

include_once "./include/config.php";

class modele_veterinaire {
    public $id; 
    public $id_specialite; 
    public $nom_veto;
    public $prenom_veto;

    public function __construct($id, $id_specialite, $nom_veto, $prenom_veto) {
        $this->id = $id;
        $this->id_specialite = $id_specialite;
        $this->nom_veto = $nom_veto;
        $this->prenom_veto = $prenom_veto;
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

        $resultatRequete = $mysqli->query("SELECT id, id_specialite, nom_veto, prenom_veto FROM veterinaires ORDER BY id");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_veterinaire($enregistrement['id'], $enregistrement['id_specialite'], $enregistrement['nom_veto'], $enregistrement['prenom_veto']);
        }

        return $liste;
    }
}

?>