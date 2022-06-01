<?php

include_once "./include/config.php";

class modele_animal {
    //public $id; 
    //public $date_naissance_animal; 
    //public $id_client; 
    //public $id_type_animal;
    public $nom_animal;
    public $nom_type;
    public $nom;
    public $prenom;
    public $telephone;

    public function __construct($nom_animal, $nom_type, $nom, $prenom, $telephone) {
       // $this->id = $id;
       // $this->date_naissance_animal = $date_naissance_animal;
       // $this->id_client = $id_client;
       // $this->id_type_animal = $id_type_animal;
        $this->nom_animal = $nom_animal;
        $this->nom_type = $nom_type;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
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

        $resultatRequete = $mysqli->query("SELECT nom_animal, nom_type, nom, prenom, telephone FROM animaux 
        INNER JOIN clients ON clients.id = animaux.id_client
        INNER JOIN types_animal ON types_animal.id = animaux.id_type_animal ORDER BY nom_animal");


        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_animal($enregistrement['nom_animal'], $enregistrement['nom_type'], $enregistrement['nom'], $enregistrement['prenom'], $enregistrement['telephone']);
        }

        return $liste;
    }
}

?>